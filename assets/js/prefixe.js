/**
 * @author kinga
 */
function Prefixe(number)
{
	var num = number.substring(0, 4);
	switch(num)
	{
		case "0907":
        case "0908":
        case "0909":
        case "0910":
        case "0912":
        case "0918":
        case "0919":
        case "0920":
        case "0921":
        case "0928":
        case "0929":
        case "0930":
        case "0938":
        case "0939":
        case "0946":
        case "0947":
        case "0948":
        case "0949":
        case "0989":
        case "0998":
        case "0999":
		  return "1";
		  break;
		case "0905":
        case "0906":
        case "0915":
        case "0916":
        case "0917":
        case "0925":
        case "0926":
        case "0927":
        case "0935":
        case "0936":
        case "0937":
        case "0994":
        case "0996":
        case "0997":
		  return "2";
		  break;
		case "0922":
        case "0923":
        case "0932":
        case "0933":
        case "0934":
        case "0942":
        case "0943":
		  return "3";
		  break;
		default:
		 return "4";
	}
}
