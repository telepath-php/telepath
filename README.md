<!-- Last updated: 2023-12-29 -->

<a name="readme-top"></a>

<!-- PROJECT SHIELDS -->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/telepath-php/telepath">
    <img src="images/logo.svg" alt="Logo" width="150" height="96">
  </a>

  <h3 align="center">Telepath</h3>

  <p align="center">
    Create Telegram Bots with this modern PHP library
    <br />
    <a href="https://telepath-php.dev"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/telepath-php/telepath/issues">Report Bug</a>
    ·
    <a href="https://github.com/telepath-php/telepath/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#before-you-start">Before You Start</a>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

Telepath is a modern framework-agnostic libraray to create Telegram Bots in PHP.

It stands out by generating a lot of PHP Code automatically from the [Telegram Bot API documentation][bot-api] and using modern PHP features like Attributes and Named Parameters.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- Before you start -->
## Before You Start

We want to make use of modern PHP all the way but the development of PHP doesn't stop. This means if there will be a feature in a new PHP version that makes sense to use in this package, we will.

**So beware of that and only use this library if you're running in a setup where you can easily upgrade to new PHP versions when they get released.**

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

1. Require this package with `composer require telepath/telepath`
2. Create an instance and pass it your Bot API Token via `$bot = new TelegramBot($token);`
3. Call all available methods of the [Telegram Bot API][bot-api] via the Bot Instance, like `$bot->sendMessage($chatId, $text);`

_For a more detailled look including how to receive and react to messages and commands, have a look into our [Documentation][docs]_

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See [LICENSE.md](LICENSE.md) for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Tii - [@TiiFuchs](https://twitter.com/TiiFuchs) - mail@tii.one

Project Link: [https://github.com/telepath-php/telepath](https://github.com/telepath-php/telepath)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
[contributors-shield]: https://img.shields.io/github/contributors/telepath-php/telepath.svg?style=for-the-badge
[contributors-url]: https://github.com/telepath-php/telepath/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/telepath-php/telepath.svg?style=for-the-badge
[forks-url]: https://github.com/telepath-php/telepath/network/members
[stars-shield]: https://img.shields.io/github/stars/telepath-php/telepath.svg?style=for-the-badge
[stars-url]: https://github.com/telepath-php/telepath/stargazers
[issues-shield]: https://img.shields.io/github/issues/telepath-php/telepath.svg?style=for-the-badge
[issues-url]: https://github.com/telepath-php/telepath/issues
[license-shield]: https://img.shields.io/github/license/telepath-php/telepath.svg?style=for-the-badge
[license-url]: https://github.com/telepath-php/telepath/blob/master/LICENSE.txt

[bot-api]: https://core.telegram.org/bots/api
[docs]: https://telepath-php.dev
