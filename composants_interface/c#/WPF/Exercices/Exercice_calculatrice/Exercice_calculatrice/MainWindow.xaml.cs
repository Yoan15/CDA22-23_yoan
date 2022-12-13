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

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            LblContent.Text = (string)LblContent.Text + ((Button)sender).Content;
        }

        private void Clear(object sender, RoutedEventArgs e)
        {
            LblContent.Text = String.Empty;
        }

        private void Equals(object sender, RoutedEventArgs e)
        {
            //LblContent.Text = "";
            string ope;
            double nb1;
            double nb2;
            int nbOpe = 0;

            if (LblContent.Text.Contains("+"))
            {
                nbOpe = LblContent.Text.IndexOf("+");
            }
            else if (LblContent.Text.Contains("-"))
            {
                nbOpe = LblContent.Text.IndexOf("-");
            }
            else if (LblContent.Text.Contains("*"))
            {
                nbOpe = LblContent.Text.IndexOf("*");
            }
            else if (LblContent.Text.Contains("/"))
            {
                nbOpe = LblContent.Text.IndexOf("/");
            }

            ope = LblContent.Text.Substring(nbOpe, 1);
            nb1 = Convert.ToDouble(LblContent.Text.Substring(0, nbOpe));
            nb2 = Convert.ToDouble(LblContent.Text.Substring(nbOpe + 1, LblContent.Text.Length - nbOpe - 1));

            if (ope == "+")
            {
                LblContent.Text += "=" + (nb1 + nb2);
            }
            else if (ope == "-")
            {
                LblContent.Text += "=" + (nb1 - nb2);
            }
            else if (ope == "*")
            {
                LblContent.Text += "=" + (nb1 * nb2);
            }
            else if (ope == "/")
            {
                LblContent.Text += "=" + (nb1 / nb2);
            }

        }
    }
}
