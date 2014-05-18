using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Request.QueryString["from"] != null)
        {
            if (Request.QueryString["to"] != null)
            {
                if (Request.QueryString["subject"] != null)
                {
                    if (Request.QueryString["message"] != null)
                    {
                        string from = Request.QueryString["from"];
                        string[] to = Request.QueryString["to"].Split(';');
                        string sub = Request.QueryString["subject"];
                        string msg = Request.QueryString["message"];

                        bool result = Functions.sendMail(from, to, sub, msg);
                        if (result)
                        {
                            Response.Write("You are successfully registered!");
                        }
                        else
                        {
                            Response.Write("-104");
                        }
                    }
                    else
                    {
                        Response.Write("-103");
                    }
                }
                else
                {
                    Response.Write("-102");
                }
            }
            else
            {
                Response.Write("-101");
            }
        }
        else
        {
            Response.Write("-100");
        }
    }
}