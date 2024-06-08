import javax.xml.parsers.*;
import org.w3c.dom.*;
import java.io.*;
import java.util.*;
//using dom parser
public class UserXMLParser {
    public static void main(String[] args) throws Exception {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Enter user ID: ");
        int userId = scanner.nextInt();

        DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
        DocumentBuilder builder = factory.newDocumentBuilder();
        Document doc = builder.parse("users.xml");

        NodeList userList = doc.getElementsByTagName("user");
        for (int i = 0; i < userList.getLength(); i++) {
            Node node = userList.item(i);
            if (node.getNodeType() == Node.ELEMENT_NODE) {
                Element userElement = (Element) node;
                if (Integer.parseInt(userElement.getAttribute("id")) == userId) {
                    System.out.println("User ID: " + userId);
                    System.out.println("Name: " + userElement.getElementsByTagName("name").item(0).getTextContent());
                    System.out.println("Email: " + userElement.getElementsByTagName("email").item(0).getTextContent());
                    System.out.println("Location: " + userElement.getElementsByTagName("location").item(0).getTextContent());
                    break;
                }else{
                          System.out.println("No records found !!");
                          break;
                }
            }
        }
    }
}