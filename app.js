var adjective = [
  "Hawaiian",
  "Lemongrass",
  "Spanish",
  "Greek",
  "Traditional",
  "Local",
  "Hungarian",
  "Italian",
  "Thai",
  "Foraged",
  "Pan-Asian",
  "Latin Fusion style",
  "Our Famous",
  "Pittsburgh style",
  "Lebanese",
  "Tangy",
  "Low Country",
  "Louisiana style",
  "Belgian",
  "Kurdish",
  "Alaskan",
  "Chilean",
  "Texas style",
  "Heirloom",
  "Artisinal",
  "Tony's",
  "Home-style",
  "Strip District style",
  "Nouevau",
  "Country-style",
  "Border Town",
  "",
  "",
  "",
  "",
  "",
  ""
];

var cooking_method = [
  "Braised",
  "Roasted",
  "Fried",
  "Smoked",
  "Broiled",
  "Dry-rubbed",
  "Candied",
  "Carmelized",
  "Char-broiled",
  "Air-cured",
  "Sous-vide",
  "Blanched",
  "Barbecued",
  "Baked",
  "Blackened",
  "Seared",
  "Pan-seared",
  "Infused",
  "Beer-battered",
  "Boiled",
  "Gently Fried",
  "Juiced",
  "Marinated",
  "Jellied",
  "Pan-fried",
  "Pickled",
  "Rendered",
  "Seared",
  "Cured",
  "Stewed",
  "3D-Printed",
  "Tenderized",
  "Buffalo",
  "Chicken Fried",
  "Simmered",
  "Raw",
  "Frosted",
  "Glazed",
  "Applewood Smoked"
];

var main_ingredient = [
  "Duck",
  "Beef",
  "Pork",
  "Pork Flank",
  "Pork Cheek",
  "Flank Steak",
  "Lobster",
  "Clam",
  "Shrimp",
  "Veal",
  "Chicken Breast",
  "Venison",
  "Ostrich",
  "Shank",
  "Sweetbreads",
  "Bear Tenderloin",
  "Spare Rib",
  "Oyster",
  "Tortilla",
  "Tripe",
  "Tofu",
  "Seitan",
  "Mutton",
  "Bacon"
];

var dish_type = [
  "Soup",
  "Coq-au-vin",
  "Tacos",
  "Sandwich",
  "Frankfurters",
  "Wrap",
  "Gazpacho",
  "Carpaccio",
  "Bisque",
  "Burrito",
  "Porridge",
  "Wings",
  "Enchiladas",
  "Burger",
  "Pot Stickers",
  "Halushki",
  "Pieroghis",
  "Flatbread",
  "Pizza",
  "Wingdings",
  "Po-boy",
  "Poppers",
  "Sliders",
  "Mini-burgers",
  "Rings",
  "Salad",
  "Confit",
  "Chowder",
  "BLT"
];

function getRand(variable){
  var meal_component = variable[Math.floor(Math.random()*variable.length)];
  return meal_component;
}


function getPrice(min, max){
  return Math.floor(Math.random() * (max - min)) + min;
}

function defineMeal(){
  var meal = {
    style: getRand(adjective),
    method: getRand(cooking_method),
    ingredient: getRand(main_ingredient),
    type: getRand(dish_type),
    price: getPrice(12,25)
  }

  var el_style = document.getElementById('style');
  var el_method = document.getElementById('method');
  var el_ingredient = document.getElementById('ingredient');
  var el_type = document.getElementById('dish');
  var el_price = document.getElementById('price');

  el_style.innerHTML = meal.style;
  el_method.innerHTML = meal.method;
  el_ingredient.innerHTML = meal.ingredient;
  el_type.innerHTML = meal.type;
  el_price.innerHTML = meal.price;
}
