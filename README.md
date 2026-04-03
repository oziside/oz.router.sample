# Практическое применение Clean Architecture и DDD в PHP на базе 1С-Битрикс

Демонстрационный 1С-Битрикс модуль, реализующий API-ориентированное приложение на базе роутера ``oz.router`` с поддержкой DI-контейнера.

Bitrix используется как инфраструктурный фреймворк, а основной фокус сделан на архитектуре приложения, разделении ответственности и организации кода.

Модуль иллюстрирует практическое применение Clean Architecture и DDD при разработке API-ориентированных решений.


## Цели проекта
Модуль используется как стенд для отладки, тестирования и развития роутера ``oz.router``, одновременно выступая практической средой для формирования и закрепления понимания разработки приложений с применением принципов Clean Architecture и DDD. В процессе работы вырабатываются и стандартизируются паттерны и конвенции проектирования, формирующие практическую основу для построения API-ориентированных решений на Bitrix.   
Всегда открыт к предложениям и улучшению 🤝


## Установка
> [!IMPORTANT]
> Модуль не предназначен для использования в production и выполняет демонстрационную функцию.   
> Рекомендуется установка на демо-решения 1С-Битрикс.

### Подготовка окружения
Модуль устанавливается в директорию `/local/modules`.   
Минимальная структура директории `local`:
```
local/
├── php_interface/  
│   ├── init.php    # подключение Composer autoload
├── modules/        # директория модулей
│   ├── ... 		# тут пусто
|── composer.json   # корневой composer.json
```

#### Подключение autoload
`local/php_interface/init.php`:

```php
<?php

$autoload = $_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php';

if (file_exists($autoload))
{
    require_once $autoload;
}
```

#### Настройка Composer
`local/composer.json`

```json
{
	"require": {
		"oz/oz.router.sample": "^1.0"
	},
	"extra": {
		"installer-paths": {
			"../modules/{$name}/": ["type:bitrix-d7-module"]
		}
	},
	"repositories": {
		"oz/router-sample": {
			"type": "path",
			"url": "./modules/oz.router.sample"
		}
	},
	"config": {
		"allow-plugins": {
			"composer/installers": true
		}
	}
}

```

### Установка модуля

Клонируйте репозиторий в директорию модулей:

```bash
cd local/modules
git clone git@github.com:oziside/oz.router.sample.git
```

Установите зависимости:

```bash
cd ../../
composer install
```

### Активация модуля

После установки выполните стандартную установку модулeй `oz.router` и `oz.router.sample` через административную панель 1С-Битрикс.

### Базовые настройки
1. Перейти в инфоблок, который является торговым каталогом. В поле "Символьный код API" установить значение `catalog`
2. В настройках модуля `oz.router` проставить ссылки к файлам конфигурации роутинга и DI контейнера
3. В файле `urlrewrite.php` добавить:

```php
 array (
    'CONDITION' => '#^/api#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/oz.api/index.php',
    'SORT' => 200,
  ),
```
