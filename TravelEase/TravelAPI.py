from flask import Flask, request, jsonify
from TravelGPT import ChatGenerator
import os
import json
try:
    from dotenv import load_dotenv
    # Load .env from this directory if present
    load_dotenv(dotenv_path=os.path.join(os.path.dirname(__file__), '.env'))
except Exception:
    # dotenv is optional; if not installed we rely on OS env vars
    pass

app = Flask(__name__)
# Initialize ChatGenerator with GEMINI_API_KEY from env
chatbot = ChatGenerator(gemini_api_key=os.getenv("GEMINI_API_KEY"))

@app.route('/chat', methods=['POST'])
def chat():
    dataset = ""
    # Get the absolute path to dataset.txt in the same directory as this script
    dataset_path = os.path.join(os.path.dirname(__file__), 'dataset.txt')
    with open(dataset_path, 'r', encoding='utf-8') as file:
        dataset = file.read()
    query = request.json.get('query')
    #Dapetin Query dari user dari Laravel.
    result = chatbot.chat(query, dataset)
    #Pakein function search_pdf_with_gpt untuk dapetin hasilnya.

    # Prepare JSON-serializable response
    json_result = {
        "response": result["response"],
    }
    
    return jsonify(json_result)

if __name__ == '__main__':
    # Ensure GEMINI_API_KEY is available
    if not os.getenv("GEMINI_API_KEY"):
        print("Peringatan: GEMINI_API_KEY belum diset. Set environment variable sebelum menjalankan produksi.")
    app.run(host="127.0.0.1", port=5000, debug=True)
    #Bikin koneksi ke port 5000.