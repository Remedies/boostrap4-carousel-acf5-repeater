# WP Bootstrap 4.x ACF 5.x Dynamic Repeater Carousel
A Dynamic custom ACF Pro repeater using bootstrap 4's carousel. 

## Installation
Copy and paste onto your .php page template for Wordpress.

## Usage
Works with: Bootstrap 4.x, ACF 5.x, Wordpress 5.0.x

### ACF Pro 5.x:
1. Define ACF Pro Repeater Field: "carousel_slides"
2. Define sub fields:

    a. slide_image
      - type: Image
      - return type: Image Array
      
    b. slide_title, type: Text
      - type: Text
      
    c. slide_description
      - type: Text
      
3. Connect to your page template/type, post template/type.
4. Edit page. and fill in the fields.

### CSS
1. Define .title_slide_input class.
```css
    .title_slide_input {
        font-size: 12px;
        color: white;
    }
```
  
2. Define .desc_slide_input class.
```css
    .desc_slide_input {
        font-size: 10px;
        color: white;
    }
```
