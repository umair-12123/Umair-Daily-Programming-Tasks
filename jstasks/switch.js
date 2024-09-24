var area = "circle"; // Assigning the string "circle" to the area variable
var PI = 3.142, l = 5, b = 4, r = 4;

switch(area){
    case 'circle':
        console.log("this is area of circle" + PI*r**2);
        break;
        case 'tri':
            console.log("Area of triangle: " + (l * b) / 2);
            break;

            case 'rec':
                console.log("Area of rectangle: " + (l * b));
                break;

                default:
                    console.log("pleast entr walid data");
            }
