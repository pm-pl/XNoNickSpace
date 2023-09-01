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
![image](https://github.com/xrde4/XNoNickSpace/assets/111656745/8c5dafc1-6a2d-4aa5-bc28-b8854a1c9903)


<br> ✔️ Protection from unwanted nicknames: The plugin prevents players with nicknames containing spaces or invisible characters from joining, ensuring cleanliness and professionalism on your server.
<br> ✔️ Flexible restriction settings: You can configure additional limitations for nicknames. For instance, you can allow spaces in the middle or at the end of nicknames by selecting the corresponding settings in the plugin menu.
<br> ✔️ Dual Language Support: The XNoNickSpace plugin comes with built-in support for two languages directly from the source code, making it easy to cater to a broader player base with different language preferences.
<br> ✔️ In Beta mode, you will have the option to add a prefix to your players' nicknames instead of kicking them if they have a space or invisible character.
<br> ✔️ The plugin also features flexible settings where you can enable a notification for all server players when a player with a space in their nickname joins.


#### :question: Why did **XNoNickSpace** appear?

The idea behind creating this plugin emerged after many players attempted to impersonate the administration by simply adding spaces or invisible characters to the beginning or end of their nicknames. After searching the internet, I couldn't find an equivalent, which led to the decision of gifting this creation to the community.

## ⬇️ Downloads:

| Downloads                                         | API       | Downloads                                                                 |
|---------------------------------------------------|-----------|---------------------------------------------------------------------------|
| latest version (0.0.1)                       | 5.x       | [GitHub Release](https://github.com/xrde4/XNoNickSpace/releases/download/0.1/XNoNickSpace.phar)                |
| latest version (0.0.1)                       | 5.x       | [Poggit Release](https://poggit.pmmp.io/p/XNoNickSpace/1)                |
<br>

## 📁 Supported software:
**This plugin works only on PocketMine-MP.** (And maybe on his NetherGames fork).

## 🔧 How to install XNoNickSpace?

1) [Download](https://poggit.pmmp.io/p/XNoNickSpace/1) latest stable released version from poggit.
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
| **Beta**     | **In BETA mode, you won't kick players; instead, you can add text or symbols to their nickname from the config. Additionally, it will notify all players about the presence of a potentially harmful player.**  
