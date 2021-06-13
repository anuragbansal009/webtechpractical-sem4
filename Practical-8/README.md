# webtechpractical-sem4

<a href="https://anuragbansal009.github.io/webtechpractical-sem4/Practical-8/P3.xsd">XSD FILE</a><br>
<a href="https://anuragbansal009.github.io/webtechpractical-sem4/Practical-8/P3.xml">XML FILE</a><br>

# Java Commands <br>
javac DOMEcho.java<br>
java DOMEcho -xsdss P3.xsd P3.xml


# XML Validation
## Description
For this assignment, you will be defining the XML schema for an XML representation of shopping order data. For the convenience of data representation, the products in this order are all books. You will have to design your own XML representation, as well as the XML schema of your representation.
- The XML representation of order should contain order id, description, request date, and many lines item
- Each line item element should contain book, quantity, and price. Price (which is price per book) should be restricted to values greater than 0
- Each book should contain book id, book name, genre, publish date, and many authors. Genre should be restricted so that it may contain only the following values {science-fiction, mystery, thriller, drama}
- Each author should contain bio, last name, first name, and optional pen name.

## Evaluation criteria
For the most part the evaluation will be based on the following tests that your schema:
- allows many line items
- allows many authors for a book and have an OPTIONAL pen name
- allows to specify price and restricts to values greater than 0
- allows to specify genre but restricts the list of values to be EXACTLY that state above. (EXACT so that it enables me to test everybody's schema easily.)
