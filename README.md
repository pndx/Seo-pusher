<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]



<h3 align="center">Seo-pusher</h3>

  <p align="center">
    Push url to seo api
    <br />
    <a href="https://github.com/pndx/Seo-pusher"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/pndx/Seo-pusher/issues">Report Bug</a>
    ·
    <a href="https://github.com/pndx/Seo-pusher/issues">Request Feature</a>
  </p>
</p>



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#license">License</a></li>
  </ol>
</details>

<!-- GETTING STARTED -->
## Getting Started

### Installation

1. Composer
   ```sh
   composer require pndx/seo-pusher
   ```
2. Clone the repo
   ```sh
   git clone https://github.com/pndx/Seo-pusher.git
   ```



<!-- USAGE EXAMPLES -->
## Usage

1. Change setting in Config.php

2. ```php
   (new \Pndx\SeoPusher\Pusher\PusherBaidu('https://example.com'))->push([
        'url1',
        'url2',
   ]);
   ``` 



<!-- ROADMAP -->
## Roadmap

See the [open issues](https://github.com/pndx/Seo-pusher/issues) for a list of proposed features (and known issues).




<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/pndx/repo.svg?style=for-the-badge
[contributors-url]: https://github.com/pndx/Seo-pusher/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/pndx/repo.svg?style=for-the-badge
[forks-url]: https://github.com/pndx/Seo-pusher/network/members
[stars-shield]: https://img.shields.io/github/stars/pndx/repo.svg?style=for-the-badge
[stars-url]: https://github.com/pndx/Seo-pusher/stargazers
[issues-shield]: https://img.shields.io/github/issues/pndx/repo.svg?style=for-the-badge
[issues-url]: https://github.com/pndx/Seo-pusher/issues
[license-shield]: https://img.shields.io/github/license/pndx/repo.svg?style=for-the-badge
[license-url]: https://github.com/pndx/Seo-pusher/blob/main/LICENSE