var area = "circle"; // Assigning the string "circle" to the area variable
var PI = 3.142, l = 5, b = 4, r = 4;

if (area == "circle") {
    console.log("Area of circle: " + PI * r ** 2);
} else if (area == "triangle") {
    console.log("Area of triangle: " + (l * b) / 2);
} else if (area == "rectangle") {
    console.log("Area of rectangle: " + (l * b));
}else {
    console.log("no area defind"    )
}
