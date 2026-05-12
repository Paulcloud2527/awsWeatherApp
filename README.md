# 🌤️ AWS Weather App - Progetto Cloud Architect

Questo progetto fa parte del mio percorso di studio per la certificazione **AWS Certified Solutions Architect Associate**. Si tratta di un'applicazione web dinamica che mostra le previsioni meteo in tempo reale, interamente ospitata su infrastruttura Cloud AWS.

## 🛠️ Stack Tecnologico
* **Provider:** Amazon Web Services (AWS)
* **Servizio:** EC2 (Elastic Compute Cloud)
* **Server Web:** Apache (httpd)
* **Linguaggio:** PHP
* **Rete:** VPC, Subnet Pubblica, Internet Gateway, Security Groups

## 📐 Architettura
L'applicazione gira su un'istanza EC2 configurata manualmente. Ho implementato un Security Group che permette il traffico HTTP (porta 80) e SSH (porta 22) per la gestione remota. Il codice è distribuito utilizzando Git direttamente sull'istanza.

## 📸 Anteprima
![Screenshot del Progetto](<img width="960" height="504" alt="Screenshot 2026-05-12 115814" src="https://github.com/user-attachments/assets/c56e03b1-6d7c-4eac-88d3-85399c76d49d" />
)

---
*Creato da Paulcloud2527 durante il corso di Stephane Maarek.*
