# Опис дизайну лендінгу "Travel Agency "Planet Tour""

При верстці лендінгу, а також інших сторінок проекту використовувати технологію БЕМ.
БЕМ - Блок-Елемент-Модифікатор, це основа сучасної верстки сторінок.

## Основні принципи БЕМ: 
- Блок (Block): Означає незалежний компонент, який може бути повторно використаний на сторінці. Кожен блок має унікальне ім'я і надається незалежність від зовнішніх стилів.

- Елемент (Element): Це частина блоку, яка не може існувати самостійно, але має сенс лише в межах блоку. Використовується для створення внутрішнього змісту блоку.

- Модифікатор (Modifier): Це клас або набір класів, які додають або змінюють стилі блоку або елемента. Модифікатори використовуються для задання різних станів блоку чи елемента, таких як стан активності, розмір, колір і т. д.

- Ваш код повинен бути простий, читабельний і повинні бути відсутні колізії ( блоки не повинні перетинатись і впливати на інші блоки).

## Правила оформлення імен

- Ім'я БЕМ блока - унікальне, при повторному використанні - писати так само. Назва блока  - логічна - відображає суть блоку.
Приклад назву блоку : travel-card - карточка туру.
Назва елементу:  travel-card__title - заголовок карточки туру.
Модифікатор (якщо є) відображається через "--", наприклад tabs__btn-item--active  - активна кнопка ( на ній є певний клас).

** Основнe правило: block-name__element-name--mod-name-mod-value **
