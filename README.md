# 🌟 TravelEase - AI Travel Management System

<div align="center">

**An intelligent travel management platform combining Laravel 11 with AI-powered assistance**

![TravelEase Banner](Maps/public/images/Screenshot1.png)

[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
[![Python](https://img.shields.io/badge/Python-3.11+-3776AB?style=for-the-badge&logo=python&logoColor=white)](https://python.org/)
[![Flask](https://img.shields.io/badge/Flask-2.0+-000000?style=for-the-badge&logo=flask&logoColor=white)](https://flask.palletsprojects.com/)
[![Google AI](https://img.shields.io/badge/Google_Gemini-4285F4?style=for-the-badge&logo=google&logoColor=white)](https://ai.google.dev/)

</div>

---

## 🎯 Project Overview

TravelEase adalah sistem manajemen perjalanan berbasis AI yang menggabungkan teknologi web modern dengan kecerdasan buatan untuk memberikan pengalaman travel planning yang seamless dan personal.

### 🏗️ Architecture Highlights

<div align="center">

```mermaid
graph TB
    A[🌐 Laravel Frontend] --> B[📡 HTTP API]
    B --> C[🐍 Flask Backend]
    C --> D[🤖 Google Gemini AI]
    C --> E[📊 Travel Dataset]
    A --> F[🗺️ Maps Integration]
    A --> G[💾 SQLite Database]
```

</div>

### 📁 Project Structure

- **`Maps/`**: Aplikasi web Laravel 11 (frontend dan API)
- **`TravelEase/`**: Backend Python dengan Flask API dan integrasi Gemini AI

---

## ✨ Key Features

<table>
<tr>
<td width="50%">

### 🎫 **Travel Management**
- Interactive travel package booking
- Route planning & navigation
- Cost estimation tools
- Travel history tracking

### 🤖 **AI-Powered Assistant**
- Natural language travel queries
- Personalized recommendations
- Indonesian language support
- Context-aware responses

</td>
<td width="50%">

![Travel Features](Maps/public/images/Screenshot2.png)

### 📱 **Additional Features**
- 🗺️ Travel location management
- 🤖 AI-powered travel assistant (Gemini)
- 📱 Responsive mobile design
- 🎫 Travel package booking
- 📍 Location-based services

</td>
</tr>
</table>

---

## 🏞️ Featured Destinations

<div align="center">

| 🏛️ Yogyakarta | 🏝️ Bali | 🌋 Lombok | 🐉 Labuan Bajo |
|:---:|:---:|:---:|:---:|
| ![Yogyakarta](Maps/public/images/Keraton%20Yogyakarta.jpg) | ![Bali](Maps/public/images/Pura%20Uluwatu.jpg) | ![Lombok](Maps/public/images/Gunung%20Rinjani.jpg) | ![Labuan Bajo](Maps/public/images/Pulau%20Komodo.jpg) |
| Historic Cultural Hub | Tropical Paradise | Adventure Island | Dragon Island Gateway |

</div>

### 🗺️ Premium Travel Packages

<div align="center">

![Travel Packages](Maps/public/images/Screenshot3.png)

</div>

**Available Routes:**
- 🚌 Jakarta ↔ Yogyakarta (3D2N) - *from Rp 850K*
- ✈️ Jakarta ↔ Bali (4D3N) - *from Rp 1.8M*  
- 🏔️ Bali ↔ Lombok (3D2N) - *from Rp 1.2M*
- 🌊 Lombok ↔ Labuan Bajo (5D4N) - *from Rp 2.5M*

</div>

---

## 🛠️ Tech Stack

<div align="center">

### Frontend & Backend
![Laravel](https://img.shields.io/badge/Laravel_11-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP_8.2+-777BB4?style=flat-square&logo=php&logoColor=white)
![Blade](https://img.shields.io/badge/Blade_Templates-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=flat-square&logo=vite&logoColor=white)

### AI & Data Processing
![Python](https://img.shields.io/badge/Python_3.11+-3776AB?style=flat-square&logo=python&logoColor=white)
![Flask](https://img.shields.io/badge/Flask-000000?style=flat-square&logo=flask&logoColor=white)
![Google AI](https://img.shields.io/badge/Google_Gemini-4285F4?style=flat-square&logo=google&logoColor=white)

### Database & Tools
![SQLite](https://img.shields.io/badge/SQLite-003B57?style=flat-square&logo=sqlite&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=flat-square&logo=composer&logoColor=white)
![Jupyter](https://img.shields.io/badge/Jupyter-F37626?style=flat-square&logo=jupyter&logoColor=white)

</div>

---

## 🚀 Quick Start

### Prerequisites
- PHP 8.2+
- Python 3.11+
- Composer
- XAMPP atau web server lainnya

### Installation

<details>
<summary><b>🔧 Setup Instructions</b></summary>

#### 1. Laravel Setup (Maps/)
```bash
cd Maps
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

#### 2. Python Setup (TravelEase/)
```bash
cd TravelEase
# Install dependencies via Jupyter notebook atau manual:
pip install transformers torch PyPDF2 pandas datasets google-generativeai requests flask python-dotenv
```

#### 3. Environment Configuration
**PowerShell (temporary):**
```powershell
$env:GEMINI_API_KEY = "your-api-key-here"
```

**Atau buat file `.env` di TravelEase/:**
```
GEMINI_API_KEY=your-api-key-here
GEMINI_MODEL=gemini-2.5-pro
```

#### 4. Running the Application
1. **Start Laravel (terminal 1):**
```bash
cd Maps
php artisan serve
```

2. **Start Python Flask API (terminal 2):**
```bash
cd TravelEase
python TravelAPI.py
```

3. **Access:** http://127.0.0.1:8000

</details>

### API Integration
Laravel berkomunikasi dengan Flask server via HTTP:
- **Flask Endpoint**: `http://127.0.0.1:5000/chat`
- **Method**: POST
- **Data**: JSON dengan field `query`

### Security Notes
- **JANGAN** commit file `.env` ke Git
- API keys disimpan di environment variables
- Database menggunakan SQLite untuk development

---

## 🎨 User Interface Showcase

<div align="center">

### 💬 AI Chatbot Interface
![Chatbot](Maps/public/images/Screenshot4.png)

### 🗺️ Route Planning
![Route Planning](Maps/public/images/Screenshot5.png)

### 📊 Travel Dashboard
![Dashboard](Maps/public/images/Screenshot6.png)

</div>

---

## 🤖 AI Integration

### Intelligent Travel Assistant

```python
# TravelEase/TravelGPT.py - Core AI Logic
class ChatGenerator:
    def __init__(self, gemini_api_key: str):
        genai.configure(api_key=gemini_api_key)
        self.model = genai.GenerativeModel(
            "gemini-2.5-pro",
            system_instruction="Travel assistant with Indonesian language support"
        )
```

**AI Features:**
- 🧠 Context-aware responses using travel dataset
- 🇮🇩 Native Indonesian language processing
- 💬 Natural conversation flow
- ⚡ Real-time query processing

---

##  Why This Project?

<div align="center">

### 💡 **Innovation Highlights**

</div>

<table>
<tr>
<td width="30%">
<div align="center">

**🔄 Dual-Stack Architecture**

Seamless integration between Laravel web framework and Python AI backend

</div>
</td>
<td width="30%">
<div align="center">

**🤖 AI-First Approach**

Context-aware travel assistant using Google's latest Gemini AI

</div>
</td>
<td width="30%">
<div align="center">

**🇮🇩 Localized Experience**

Full Indonesian language support with cultural context

</div>
</td>
</tr>
</table>

### 📊 Project Metrics
- 🏗️ **Architecture**: Dual-stack (Laravel + Python)
- 🌐 **Routes**: 12+ web routes with Indonesian naming
- 🎨 **Views**: 15+ Blade templates with inline styling
- 🤖 **AI Integration**: Google Gemini 2.5 Pro
- 📦 **Travel Packages**: 5+ destination combinations

---

## 🚀 Future Roadmap

- [ ] 📱 **Mobile App Development** (Flutter/React Native)
- [ ] 💳 **Payment Gateway Integration**
- [ ] 📍 **Real-time Location Tracking**
- [ ] 🔔 **Push Notifications**
- [ ] 📈 **Analytics Dashboard**
- [ ] 🌍 **Multi-language Support**

---

## 👨‍💻 About Developer

<div align="center">

**Sabilillah Ramaniya Widodo** ([@sblrm](https://github.com/sblrm))

*Aspiring Full-Stack Developer | AI Enthusiast | Travel Technology Innovator*

[![GitHub Stats](https://github-readme-stats.vercel.app/api?username=sblrm&show_icons=true&theme=gradient&hide_border=true&count_private=true)](https://github.com/sblrm)

[![Top Languages](https://github-readme-stats.vercel.app/api/top-langs/?username=sblrm&layout=compact&theme=gradient&hide_border=true)](https://github.com/sblrm)

[![GitHub](https://img.shields.io/badge/GitHub-sblrm-181717?style=for-the-badge&logo=github)](https://github.com/sblrm)
[![Email](https://img.shields.io/badge/Email-Contact_Me-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:sabilillah.widodo@binus.ac.id)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Connect-0077B5?style=for-the-badge&logo=linkedin)](https://linkedin.com/in/sblrm)

### 💼 **Seeking Internship Opportunities**
*Full-Stack Development | AI Integration | Travel Technology*

### 🌟 **Star this repository if you found it interesting!**

**Built with ❤️ by Sabilillah Ramaniya Widodo**

*Combining passion for travel with cutting-edge technology*

[![Profile Views](https://komarev.com/ghpvc/?username=sblrm&color=blueviolet&style=for-the-badge)](https://github.com/sblrm)

</div>

---

## 📄 License

All rights reserved by Sabilillah Ramaniya Widodo.
