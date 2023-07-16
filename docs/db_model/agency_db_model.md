# Опис діаграми моделі бази даних

У цьому документі описано перелік таблиць та зв'язків, що повинні бути реалізовані у ході розробки проекту.


## legal_bodies

Описує юридичну сутність, яка виконує оплату.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- title: Назва юридичної сутності. VARCHAR(256), UNIQUE
- edrpou: Код ЄДРПОУ. INT, UNIQUE
- boss_name: Ім'я відповідального обличчя. VARCHAR(256), NULL
- boss_function: Посада відповідального обличчя. VARCHAR(256), NULL
- account: Номер банківського рахунку. VARCHAR(256), UNIQUE
- bank_id: Ідентифікатор банку. BIGINT, FOREIGN KEY
    * bank_id є ключем до таблиці banks, поле id


## banks

Описує банк.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- title: Назва банку. VARCHAR(256), UNIQUE
- city: Місто офісу банку. VARCHAR(256), NULL


## people

Описує фізичну особу та її паспортні дані.
Має зв'язок багато-до-багатьох з таблицею tourists.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- first_name: Ім'я людини. VARCHAR(128)
- middle_name: Друге ім'я людини. VARCHAR(128), NULL
- last_name: Фамілія. VARCHAR(128)
- pass_serial: Серійний номер паспорту. VARCHAR(128), NULL, UNIQUE
- pass_num: Номер паспорту. VARCHAR(128), NULL, UNIQUE
- pass_dist: Видавничий орган. VARCHAR(128), NULL, UNIQUE
- pass_date: Дата видачі. DATE, NULL, UNIQUE


## messengers

Описує месенджер, який може бути доступні за телефоном.
Має зв'язок багато-до-багатьох з таблицею tourist_phones.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- name: Назва месенджеру. VARCHAR(64), UNIQUE


## tourist_phones

Описує номер телефону туриста.
Має зв'язок багато-до-багатьох з таблицями messengers та tourists.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- number: Номер телефону. VARCHAR(32), UNIQUE


## tourists

Описує туриста або групу туристів.
Має зв'язок багато-до-багатьох з таблицями tourist_phones, people та tourist_tags.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- name: Ім'я туриста/назва групи. VARCHAR(128)
- comment: Коментар до туриста. VARCHAR(1024), NULL
- email: Контактна адреса електронної пошти. VARCHAR(256)
- city: Місто розташування туриста. VARCHAR(128), NULL
- birth_date: Дата народження туриста. DATE, NULL


## tourist_tags

Описує тег, який надається туристу.
Має зв'язок багато-до-багатьох з таблицею tourists.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- name: Назва тегу VARCHAR(256), UNIQUE


## companies

Описує туристичну агенцію, від обличчя якої відбувається робота.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- title: Назва компанії. VARCHAR(256), UNIQUE
- city: Місто розташування офісу. VARCHAR(256), NULL
- address: Адреса розташування офісу. VARCHAR(256), NULL
- bank_id: Ідентифікатор банку. BIGINT, FOREIGN KEY
    * bank_id є ключем до таблиці banks, поле id


## employees

Описує працівника туристичного агенства.
Має зв'язок багато-до-багатьох з таблицею employee_roles.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- first_name: Ім'я працівника. VARCHAR(128)
- last_name: Фамілія працівника. VARCHAR(128)
- company_id: Ідентифікатор компанії працівника. BIGINT, FOREIGN KEY
    * bank_id є ключем до таблиці companies, поле id
- user_id: Ідентифікатор зв'язаного користувача. BIGINT, FOREIGN KEY
    * user_id є ключем до таблиці users, поле id

## employee_roles

Описує роль працівника туристичного агенства.
Має зв'язок багато-до-багатьох з таблицею employees.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- name: Назва ролі. VARCHAR(256), UNIQUE


## users

Влаштована таблиця Laravel. Описує користувача системи

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- name: Ім'я користувача. VARCHAR(255)
- email: Контактна адрреса електронної пошти. VARCHAR(255), UNIQUE
- email_verified_at: Час верифікації адреси електронної пошти. TIMESTAMP, NULL
- password: Хеш парлю користувача. VARCHAR(256)
- remember_token: Токен сесії користувача. VARCHAR(100), NULL
- created_at: Дата реєстрації користувача. TIMESTAMP, NULL
- updated_at: Дата оновлення користувача. TIMESTAMP, NULL


## countries

Описує країну, у якій проходить тур.
Має зв'язок багато-до-багатьох з таблицею tours.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- name: Назва країни. VARCHAR(256), UNIQUE


## tours

Описує тур, яким можуть користуватись туристи.
Має зв'язок багато-до-багатьох з таблицями tour_types та countries.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- name: Назва туру. VARCHAR(256)
- description: Опис туру. VARHCAR(1024), NULL


## tour_types

Описує тип туру.
Має зв'язок багато-до-багатьох з таблицею tours.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- name: Назва типу. VARCHAR(256), UNIQUE


## sales

Описує заявку туриста.

- id: Ідентифікатор. BIGINT, PRIMARY KEY
- tour_id: Ідентифікатор туру. BIGINT, FOREIGN KEY
    * tour_id є ключем до таблиці tours, поле id
- tourist_id: Ідентифікатор туриста. BIGINT, FOREIGN KEY
    * tourist_id є ключем до таблиці tourists, поле id
- employee_id: Ідентифікатор працівника, що оформив заявку. BIGINT, FOREIGN KEY
    * employee_id є ключем до таблиці employees, поле id
- start_date: Дата початку подорожі. DATE
- end_date: Дата закінчення подорожі. DATE
- description: Опис заявки. VARCHAR(1024), NULL
