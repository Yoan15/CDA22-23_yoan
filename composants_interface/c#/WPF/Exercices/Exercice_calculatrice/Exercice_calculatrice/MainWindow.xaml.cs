using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace Exercice_calculatrice
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        double nb1 = 0;
        double nb2;
        double res;
        string op;

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            //LblContent.Text = (string)LblContent.Text + ((Button)sender).Content;
            //LblHistorique.Text = (string)LblHistorique.Text + ((Button)sender).Content;

            if (nb1 == 0)
            {
                nb1 = Convert.ToDouble((string)LblContent.Text + ((Button)sender).Content);
            }
            //else
            //{
            //    nb2 = Convert.ToDouble((string)LblContent.Text + ((Button)sender).Content);
            //}
            test.Content = nb1;

            LblContent.Text = (string)LblContent.Text + ((Button)sender).Content;
            //LblHistorique.Text = nb1 + op + nb2 + "=" + res;
        }

        private void Clear(object sender, RoutedEventArgs e)
        {
            LblContent.Text = String.Empty;
        }

        private void Equals(object sender, RoutedEventArgs e)
        {
            ////Test
            //string op;
            //double nb1;
            //double nb2;
            //int nbOp = 0;

            //if (LblContent.Text.Contains("+"))
            //{
            //    nbOp = LblContent.Text.IndexOf("+");
            //}
            //else if (LblContent.Text.Contains("-"))
            //{
            //    nbOp = LblContent.Text.IndexOf("-");
            //}
            //else if (LblContent.Text.Contains("*"))
            //{
            //    nbOp = LblContent.Text.IndexOf("*");
            //}
            //else if (LblContent.Text.Contains("/"))
            //{
            //    nbOp = LblContent.Text.IndexOf("/");
            //}

            //op = LblContent.Text.Substring(nbOp, 1);
            //nb1 = Convert.ToDouble(LblContent.Text.Substring(0, nbOp));
            //nb2 = Convert.ToDouble(LblContent.Text.Substring(nbOp + 1, LblContent.Text.Length - nbOp - 1));

            //if (op == "+")
            //{
            //    LblHistorique.Text += "=" + (nb1 + nb2);
            //}
            //else if (op == "-")
            //{
            //    LblHistorique.Text += "=" + (nb1 - nb2);
            //}
            //else if (op == "*")
            //{
            //    LblHistorique.Text += "=" + (nb1 * nb2);
            //}
            //else if (op == "/")
            //{
            //    LblHistorique.Text += "=" + (nb1 / nb2);
            //}

            

            switch (op)
            {
                case "+":
                    res = nb1 + nb2;
                    break;
                case "-":
                    res = nb1 - nb2;
                    break;
                case "*":
                    res = nb1 * nb2;
                    break;
                case "/":
                    res = nb1 / nb2;
                    break;
            }
        }

        private void Operator(object sender, RoutedEventArgs e)
        {
            op = Convert.ToString(((Button)sender).Content);
        }
    }
}
