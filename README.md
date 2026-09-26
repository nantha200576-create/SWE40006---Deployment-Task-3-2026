# SWE40006 Software Deployment and Evolution - Task 3

**Student ID:** 106214014
**Unit Code:** SWE40006
**Attempted Level:** Task 3.3 (High Distinction)

---

## Repository Overview
This repository contains the codebase, cloud configurations, and deployment artifacts for **Task 3: Azure Cloud Deployment & Multi-Stack Application Setup**.

---

##  Overview of Completed Tasks

### **Task 3.1: Azure Environment Setup & Tooling Configuration**
- **Subscription:** Azure for Students (Active)
- **Tooling Installed:** Visual Studio Code, Azure Tools Extension Pack, C# Dev Kit Extension
- **Authentication:** Configured SSO authentication between VS Code and Azure tenant via Azure Resource Manager (ARM).

---

### **Task 3.2: Primary Stack Deployment (C# ASP.NET Core)**
- **Framework:** ASP.NET Core Razor Pages (.NET 8.0 LTS)
- **Local Scaffolding Command:** `dotnet new webapp -n AppCSharp106214014`
- **Hosted Azure App Service:** `app-csharp-106214014`
- **Live URL:** [https://app-csharp-106214014.azurewebsites.net](https://app-csharp-106214014.azurewebsites.net)
- **Service Verification:** Successfully tested stopping/disabling and restarting the App Service instance.

---

### **Task 3.3: Secondary Multi-Stack Deployment (PHP)**
- **Runtime Stack:** PHP 8.x (Linux Host)
- **Hosted Azure App Service:** `app-php-106214014` (Region: East Asia)
- **Live URL:** [https://app-php-106214014-bzd8dacjdagbgwfy.eastasia-01.azurewebsites.net](https://app-php-106214014-bzd8dacjdagbgwfy.eastasia-01.azurewebsites.net)
- **Identity Verification:** Dynamic script output rendering Student ID `106214014` and runtime server environment details.

---

## 🛠️ Summary of Key Technical Fixes
1. **Azure Location Policies:** Resolved regional restriction errors by targeting all resources to the **East Asia** (`eastasia`) region.
2. **Resource Provider Namespace:** Explicitly registered `Microsoft.OperationalInsights` under subscription providers.
3. **HTTP 503 Startup Error:** Downgraded `.csproj` target framework from preview versions to supported LTS **.NET 8.0**.
4. **App Service Plan Quota Limits:** Scaled underlying App Service Plan from **F1 Free** to **B1 Basic** to overcome daily CPU quota suspensions.

---

## 📄 License & AI Declaration
Generative AI (Google Gemini) was used for document formatting, report grammar refinement, and error diagnostic guidance. All code, cloud deployments, and Azure resource configurations were performed independently by Student ID **106214014**.
