<div align="center">
  <img src="https://github.com/xrde4/XNoNickSpace/blob/main/icon.png?raw=true" alt="Logo" width="140" height="80">
  <h3>XNoNickSpace</h3>
  <p align="center">
   The XNoNickSpace plugin provides protection for Minecraft Bedrock servers by disallowing entry with usernames containing spaces or invisible characters   
  </p>

  
[![Stars][stars-badge]][stars-url]

[stars-url]: https://github.com/xrde4/Xcoords/stargazers
[stars-badge]: https://img.shields.io/github/stars/xrde4/Xcoords.svg?style=for-the-badge



</div>

<!-- ABOUT THE PROJECT -->
## About The Project
![image](https://github.com/xrde4/XNoNickSpace/assets/111656745/7927d088-70f0-46d7-9aea-764c6c5d4a14)

<br> ✔️ Protection from unwanted nicknames: The plugin prevents players with nicknames containing spaces or invisible characters from joining, ensuring cleanliness and professionalism on your server.
<br> ✔️ Flexible restriction settings: You can configure additional limitations for nicknames. For instance, you can allow spaces in the middle or at the end of nicknames by selecting the corresponding settings in the plugin menu.
<br> ✔️ Dual Language Support: The XNoNickSpace plugin comes with built-in support for two languages directly from the source code, making it easy to cater to a broader player base with different language preferences.

#### :question: Why did **XNoNickSpace** appear?

The idea behind creating this plugin emerged after many players attempted to impersonate the administration by simply adding spaces or invisible characters to the beginning or end of their nicknames. After searching the internet, I couldn't find an equivalent, which led to the decision of gifting this creation to the community.

## ⬇️ Downloads:

| Downloads                                         | API       | Downloads                                                                 |
|---------------------------------------------------|-----------|---------------------------------------------------------------------------|
| latest version (0.0.1)                       | 5.x       | [GitHub Release](https://github.com/xrde4/XNoNickSpace/releases/download/0.1/XNoNickSpace.phar)                |
<br>

## 📁 Supported software:
**This plugin works only on PocketMine-MP.** (And maybe on his NetherGames fork).

## 🔧 How to install XNoNickSpace?

1) [Download](https://github.com/xrde4/XNoNickSpace/releases/download/0.1/XNoNickSpace.phar) latest stable released version from poggit.
2) Move dowloaded file to your server **/plugins/** folder.
3) Restart the server.
4) Configure the language and protection level in the plugin's config; by default, it will operate at the highest level of protection.

## ⚙️ Configuring XNoNickSpace:
After installing the plugin on the server, you should navigate to the 'plugins_data' folder, find 'XNoNickSpace,' and in the 'config.yml' file, change the 'type_check' to the mode that suits your needs the most:

| **TYPE**      | **Description**                                                                                                                                                                                                                                                                                                                                                                                                                                     |
|------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **Easy**     | **Checks for spaces or invisible characters at the beginning of the nickname.**  
| **Intermediate**     | **Checks for spaces or invisible characters at the end of the nickname.**  
| **Advanced**     | **Checks for spaces or invisible characters both at the beginning and end of the nickname.**  
| **Expert**     | **Checks for spaces or invisible characters throughout the entire nickname.**  
