# lab 2

## Requirements

مطلوب مهمة الهدف منها تحقيق ثغرة XSS من خلال عمل تطبيق شات (web code) مع قاعدة بيانات (mysql) بحيث :-

1. يقوم أحد المشاركين في الشات بتحميل كود يستدعي صورة من أي موقع ويخزن هذا الكود في قاعدة البيانات بحيث يتم يتم تحميل الكود عند عمل AutoRefresh للصفحة عند المشاركين في الشات.
2. يقوم أحد المشاركين في الشات بتحميل كود يقرأ الـ local cookies ويخزن هذا الكود في قاعدة البيانات بحيث يتم تحميل الكود عند عمل AutoRefresh للصفحة عند المشاركين في الشات. ويتم ارسال محتوى الـ cookies إى قاعدة بيانات بحيث تصبح البيانات موجودة لدى المخترق.
3. يتم عمل الكود الصحيح لحل المشكلة الموضحة في النقطتين 1،2

مطلوب عمل مجموعات مكونة من طالبين. يتم التسليم في وقت المحاضرة يوم الاثنين القادم 6.3.2023 على اجهزتكم الشخصية.
دمتم موفقين

## Implementation

# \* [chatApp](./chatXSS/)

# \* [XSSCookiesHolder](./XSSCookiesHolder/)

## Online Demo

# \* [chatApp](https://chat.khader.atyaf.cloud/)

# \* [XSSCookiesHolder](https://khader.atyaf.cloud/)

---

---

## Discussion

> Insecure Code:
> This code creates a new chat message and sends it to a recipient, and also publishes the message to a channel for real-time delivery.
>
> > ![alt](./photo_2023-03-05_23-58-06.jpg)

---

> Secure Code:
>
> > ![alt](./photo_2023-03-05_23-58-12.jpg)

htmlentities() is a built-in PHP function that converts special characters to their corresponding HTML entities. This function is useful for preventing cross-site scripting (XSS) attacks by ensuring that user input containing HTML tags and special characters are properly encoded before being displayed on a web page.

The htmlentities() function takes three mandatory parameters:

1. $string (string): The input string to be encoded.
2. $flags (integer): A set of flags that modify the behavior of the function. The most common flags used are ENT_QUOTES, which converts both double and single quotes, and ENT_HTML5, which encodes all characters in the input string.
3. $encoding (string): The character encoding used in the input string. The default is "ISO-8859-1", but it is recommended to use "UTF-8" for better international support.

- In the code example provided, htmlentities() is used to encode the message body and attachment title strings using the ENT_QUOTES flag and "UTF-8" encoding. This ensures that any special characters and quotes are properly encoded as HTML entities before being saved to the database or displayed on a web page. This helps to prevent XSS attacks that could be used to execute malicious scripts in the user's browser.
