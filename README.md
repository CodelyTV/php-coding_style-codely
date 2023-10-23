<p align="center">
  <a href="https://codely.com">
    <img src="https://user-images.githubusercontent.com/10558907/170513882-a09eee57-7765-4ca4-b2dd-3c2e061fdad0.png" width="300px" height="92px"/>
  </a>
</p>

<h1 align="center">
  ✍️ Codely's Easy Coding Standards configuration
</h1>

<p align="center">
    <a href="https://github.com/CodelyTV"><img src="https://img.shields.io/badge/CodelyTV-OS-green.svg?style=flat-square" alt="Codely Open Source"/></a>
    <a href="https://pro.codely.com"><img src="https://img.shields.io/badge/CodelyTV-PRO-black.svg?style=flat-square" alt="CodelyTV Courses"/></a>
</p>

<p align="center">
  Opinionated linting configuration considering modern PHP best practices and providing consistency. 👌
  <br />
  <br />
  Take a look, play and have fun with this.
  <a href="https://github.com/CodelyTV/php-coding_style-codely/stargazers">Stars are welcome 😊</a>
</p>

## 👀 How to use

1. Install the dependency
    ```sh
    composer require --dev codelytv/coding-style
    ```
2. Add it to your `ecs.php` file:
    ```php
    use CodelyTv\CodingStyle;
    use Symplify\EasyCodingStandard\Config\ECSConfig;

    return function (ECSConfig $ecsConfig): void {
        $ecsConfig->paths([__DIR__ . '/src',]);

        $ecsConfig->sets([CodingStyle::DEFAULT]);

        // Or this if you prefer to have the code aligned
        // $ecsConfig->sets([CodingStyle::ALIGNED]);
    };
    ```
3. Execute it:
    ```sh
    ./vendor/bin/ecs check
    ```

## 🤔 What it does

- Lints PHP using PSR-12
- Extends some config (you can see all the rules [here](src/coding_style.php))
- Use tabs to indent ([reason](https://www.youtube.com/watch?v=yD2T42zsP7c)). If you want to use spaces, you can add the
  following line at the end of your `ecs.php`:
    ```php
    use Symplify\EasyCodingStandard\ValueObject\Option;

	$ecsConfig->indentation(Option::INDENTATION_SPACES);
    ```

## 📦 How to release a new version

Simply create a new [GitHub Release](https://github.com/CodelyTV/php-coding_style-codely/releases/new) following
semantic versioning.

## 👌 Codely Code Quality Standards

Publishing this package we are committing ourselves to the following code quality standards:

- 🤝 Respect **Semantic Versioning**: No breaking changes in patch or minor versions
- 🤏 No surprises in transitive dependencies: Use the **bare minimum dependencies** needed to meet the purpose
- 🎯 **One specific purpose** to meet without having to carry a bunch of unnecessary other utilities
- 📖 **Well documented Readme** showing how to install and use
- ⚖️ **License favoring Open Source** and collaboration
