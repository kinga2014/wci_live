using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.IO;
using System.Web.UI.WebControls;
using System.Security.Cryptography;
using System.Text;
using System.Net.Mail;
using System.Net;
using System.Text.RegularExpressions;

/// <summary>
/// Summary description for configController
/// </summary>
public class Functions
{
    public Functions()
	{
	}

    public enum prefixe
    {
        invalid_number = 5,
        invalid_prefix = 4,
        sun = 3,
        globe = 2,
        smart = 1
    }

    public static int prefixes(string number)
    {
        int net = (int)prefixe.invalid_number;

        if (number.Length == 11)
        {
            switch (number.Substring(0, 4))
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
                    net = (int)prefixe.smart; ;
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
                    net = (int)prefixe.globe; ;
                    break;
                case "0922":
                case "0923":
                case "0932":
                case "0933":
                case "0934":
                case "0942":
                case "0943":
                    net = (int)prefixe.sun; ;
                    break;
                default:
                    net = (int)prefixe.invalid_prefix; ;
                    break;
            }
        }
        return net;
    }

    public static string format_currency(decimal amount)
    {
        return String.Format("{0:c}", amount).Replace("$", "");
    }

    static DateTime date_time()
    {
        return Convert.ToDateTime(DateTime.Now.ToShortDateString() + " " + DateTime.Now.ToLongTimeString());
    }

    public static DateTime current_DateTime()
    {
        string timeD = date_time().ToString("yyyy-MM-dd") + " " + DateTime.Now.ToLongTimeString();
        DateTime dc = Convert.ToDateTime(timeD);
        return dc;
    }

    public enum Types 
    {
        numerics=0,
        characters=1,
        mix=2
    }

    public static string RamdomCodes(int size, Types type)
    {
        Random _rng = new Random();
        string _types = "";
        switch (type)
        {
            case Types.numerics :
                _types = "123456789";
                break;
            case Types.characters:
                _types = "ABCDEFGHJKLMNPQRSTUVWXYZ";
                break;
            default :
                _types = "123456789ABCDEFGHJKLMNPQRSTUVWXYZ";
                break;
        }
        char[] buffer = new char[size];
        for (int i = 0; i < size; i++)
        {
            buffer[i] = _types[_rng.Next(_types.Length)];
        }
        return new string(buffer);
    }


    public static bool email_validation(string email)
    {
        try
        {
            Regex rgx = new Regex(@"^((([\w]+\.[\w]+)+)|([\w]+))@(([\w]+\.)+)([A-Za-z]{1,3})$", RegexOptions.IgnoreCase);
            if (rgx.IsMatch(email))
            {
                return true;
            }
        }
        catch (FormatException)
        { }
        return false;
    }

    public static bool sendMail(string from, string[] emails, string subject, string message)
    {
        MailMessage mail = new MailMessage();
        mail.From = new System.Net.Mail.MailAddress("kingpauloaquino@gmail.com", "Testing Email");

        // new System.Net.Mail.MailAddress("weconx.ph@gmail.com", "weconx.com.ph");

        // The important part -- configuring the SMTP client
        SmtpClient smtp = new SmtpClient();
        smtp.Port = 587; 
        smtp.EnableSsl = true;
        smtp.DeliveryMethod = SmtpDeliveryMethod.Network;
        smtp.UseDefaultCredentials = false;
        smtp.Credentials = new NetworkCredential("kingpauloaquino@gmail.com", "kpa098765");
        smtp.Host = "smtp.gmail.com";

        //recipient address
        int eCounter = emails.Count();

        for (int i = 0; i < eCounter; i++)
        {
            string email = emails[i];

            if (email != "")
            {
                mail.To.Add(new MailAddress(email));
            }
        }
        
        mail.IsBodyHtml = true;
        mail.Subject = subject;
        mail.Body = message;
        try
        {
            smtp.Send(mail);
            return true;
        }
        catch (Exception ex)
        {}
        return false;
    }

    static string pass = "ABC21abc";
    public static string encrypt(string input)
    {
        RijndaelManaged AES = new RijndaelManaged();
        MD5CryptoServiceProvider Hash_AES = new MD5CryptoServiceProvider();
        string encrypted = "";
        try
        {
            byte[] hash = new byte[32];
            byte[] temp = Hash_AES.ComputeHash(System.Text.ASCIIEncoding.ASCII.GetBytes(pass));
            Array.Copy(temp, 0, hash, 0, 16);
            Array.Copy(temp, 0, hash, 15, 16);
            AES.Key = hash;
            AES.Mode = CipherMode.ECB;
            ICryptoTransform DESEncryptor = AES.CreateEncryptor();
            byte[] buffer = ASCIIEncoding.ASCII.GetBytes(input);
            encrypted = Convert.ToBase64String(DESEncryptor.TransformFinalBlock(buffer, 0, buffer.Length));
        }
        catch (Exception ex)
        { }
        return encrypted;
    }

    public static string decrypt(string input)
    {
        RijndaelManaged AES = new RijndaelManaged();
        MD5CryptoServiceProvider Hash_AES = new MD5CryptoServiceProvider();
        string decrypted = "";
        try
        {
            byte[] hash = new byte[32];
            byte[] temp = Hash_AES.ComputeHash(System.Text.ASCIIEncoding.ASCII.GetBytes(pass));
            Array.Copy(temp, 0, hash, 0, 16);
            Array.Copy(temp, 0, hash, 15, 16);
            AES.Key = hash;
            AES.Mode = CipherMode.ECB;
            ICryptoTransform DESDecryptor = AES.CreateDecryptor();
            byte[] buffer = Convert.FromBase64String(input);
            decrypted = ASCIIEncoding.ASCII.GetString(DESDecryptor.TransformFinalBlock(buffer, 0, buffer.Length));
        }
        catch (Exception ex)
        { }
        return decrypted;
    }

}