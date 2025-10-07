import os
import google.generativeai as genai

class ChatGenerator:
    def __init__(self, gemini_api_key: str | None = None, model_name: str | None = None):
        # Configure Gemini API key from param or environment
        api_key = gemini_api_key or os.getenv("GEMINI_API_KEY")
        if not api_key:
            raise ValueError("GEMINI_API_KEY is not set. Provide it via constructor or environment variable.")
        genai.configure(api_key=api_key)
        # Prefer explicit param, then env override, then default to Gemini 2.5 Pro
        effective_model = model_name or os.getenv("GEMINI_MODEL") or "gemini-2.5-pro"
        self.model = genai.GenerativeModel(
            effective_model,
            system_instruction=(
                "You are a helpful travel assistant. Use the provided dataset as authoritative context. "
                "Answer in Indonesian unless the user asks otherwise. Limit answers to <300 words>."
            ),
        )

    def chat(self, query: str, dataset: str):
        # Provide dataset as additional context alongside the user query
        # and keep responses concise and grounded.
        prompt_parts = [
            "DATASET (ringkasan paket & aturan layanan):\n" + dataset,
            "\nPERTANYAAN PENGGUNA:\n" + query,
        ]
        try:
            response = self.model.generate_content(prompt_parts)

            text = getattr(response, "text", None)
            if not text:
                # Fallback for older client versions
                try:
                    text = response.candidates[0].content.parts[0].text  # type: ignore[attr-defined]
                except Exception:
                    text = "Maaf, terjadi kendala saat menghasilkan jawaban. Coba lagi sebentar lagi."

            return {"response": text}
        except Exception as e:
            # Print debug info to server logs to help diagnose (invalid API key, model name, network, quota, etc.)
            try:
                print(f"[Gemini Error] {e}")
            except Exception:
                pass
            # Return a friendly message; API errors will be surfaced to caller if needed
            return {"response": "Maaf, layanan AI sedang bermasalah. Coba lagi nanti."}