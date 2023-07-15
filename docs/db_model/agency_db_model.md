# Опис діаграми моделі бази даних

У цьому документі описано перелік таблиць та зв'язків, що повинні бути реалізовані у ході розробки проекту.


## legal_bodies

Описує юридичну сутність, яка виконує оплату.

- id: Ідентифікатор. INT, PRIMARY KEY
- title: Назва юридичної сутності. VARCHAR(256)
- edrpou: Код ЄДРПОУ. INT
- boss_name: Ім'я відповідального обличчя. VARCHAR(256)
- boss_function: Уточнити. VARCHAR(256)
- account: Номер банківського рахунку. VARCHAR(256)
- bank_id: Ідентифікатор банку. INT, FOREIGN KEY
    * bank_id є ключем до таблиці banks, поле id


    asfhskjdsakdfhasjlkdfhaskjdfhfajksdhfajlksdfhlsjk


## banks

Описує банк.

- id: Ідентифікатор. INT, PRIMARY KEY
- title: Назва банку. VARCHAR(256)
- city: Місто офісу банку. VARCHAR(256)


## people

Описує фізичну особу та її паспортні дані.
Має зв'язок багато-до-багатьох з таблицею tourists.

- id: Ідентифікатор. INT, PRIMARY KEY
- first_name: Ім'я людини. VARCHAR(128)
- middle_name: Друге ім'я людини. VARCHAR(128)
- last_name: Фамілія. VARCHAR(128)
- pass_serial: Серійний номер паспорту. VARCHAR(128)
- pass_num: Номер паспорту. VARCHAR(128)
- pass_dist: Видавничий орган. VARCHAR(128)
- pass_date: Дата видачі. DATE


## messengers

Описує месенджери, які можуть бути доступні за телефоном.
Має зв'язок багато-до-багатьох з таблицею tourist_phones.

- id: Ідентифікатор. INT, PRIMARY KEY
- name: Назва месенджеру. VARCHAR(64)


## tourist_phones

Описує номер телефону туриста та доступні месенджери.
Має зв'язок багато-до-багатьох з таблицями messengers та tourists.

- id: Ідентифікатор. INT, PRIMARY KEY
- number: Номер телефону. VARCHAR(32)


## tourists

Описує туриста або групу туристів.
Має зв'язок багато-до-багатьох з таблицями tourist_phones, people та tourist_tags.

- id: Ідентифікатор. INT, PRIMARY KEY
- name: Ім'я туриста/назва групи. VARCHAR(128)
- comment: Коментар до туриста. VARCHAR(1024)
- email: Контактна адреса електронної пошти. VARCHAR(256)
- city: Місто розташування туриста. VARCHAR(128)
- birth_date: Дата народження туриста. DATE


## tourist_tags

Описує тег, який надається туристу.
Має зв'язок багато-до-багатьох з таблицею tourists.

- id: Ідентифікатор. INT, PRIMARY KEY
- name: Назва тегу VARCHAR(256)


## companies

Описує туристичну агенцію, від обличчя якої відбувається робота.

- id: Ідентифікатор. INT, PRIMARY KEY
- title: Назва компанії. VARCHAR(256)
- city: Місто розташування офісу. VARCHAR(256)
- address: Адреса розташування офісу. VARCHAR(256)
- bank_id: Ідентифікатор банку. INT, FOREIGN KEY
    * bank_id є ключем до таблиці banks, поле id


## employees

Описує працівника туристичного агенства.
Має зв'язок багато-до-багатьох з таблицею employee_tags.

- id: Ідентифікатор. INT, PRIMARY KEY
- first_name: Ім'я працівника. VARCHAR(128)
- last_name: Фамілія працівника. VARCHAR(128)
- email: Контактна адрреса електронної пошти. VARCHAR(256)
- company_id: Ідентифікатор компанії працівника. INT, FOREIGN KEY
    * bank_id є ключем до таблиці companies, поле id

## employee_roles

Описує ролі працівників туристичного агенства.
Має зв'язок багато-до-багатьох з таблицею employees.

- id: Ідентифікатор. INT, PRIMARY KEY
- name: Назва ролі. VARCHAR(256)


## countries

Описує країну, у якій проходить тур.
Має зв'язок багато-до-багатьох з таблицею tours.

- id: Ідентифікатор. INT, PRIMARY KEY
- name: Назва країни. VARCHAR(256)


## tours

Описує тури, якими можуть користуватись туристи.
Має зв'язок багато-до-багатьох з таблицями tour_tags та countries.

- id: Ідентифікатор. INT, PRIMARY KEY
- name: Назва туру. VARCHAR(256)
- description: Опис туру. VARHCAR(1024)


## tour_types

Описує тип туру.
Має зв'язок багато-до-багатьох з таблицею tours.

- id: Ідентифікатор. INT, PRIMARY KEY
- name: Назва типу. VARCHAR(256)


## sales

Описує заявки туристів.

- id: Ідентифікатор. INT, PRIMARY KEY
- tour_id: Ідентифікатор туру. INT, FOREIGN KEY
    * tour_id є ключем до таблиці tours, поле id
- tourist_id: Ідентифікатор туриста. INT, FOREIGN KEY
    * tourist_id є ключем до таблиці tourists, поле id
- employee_id: Ідентифікатор працівника, що оформив заявку. INT, FOREIGN KEY
    * employee_id є ключем до таблиці employees, поле id
- start_date: Дата початку подорожі. DATE
- end_date: Дата закінчення подорожі. DATE
- description: Опис заявки. VARCHAR(1024)


