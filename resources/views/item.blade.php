<!-- This file is for creating the layout of a single item
Get the item's column name with the following syntax:
<open parentheses><open parentheses> $item->name <closing parentheses><closing parentheses> -->
@foreach ($items as $item)
<p>Item</p>
<button class="addToCartButton" type="button" name="addToCartButton" value="{{ $item->modelNumber }}">Add to Cart</button>
@endforeach
