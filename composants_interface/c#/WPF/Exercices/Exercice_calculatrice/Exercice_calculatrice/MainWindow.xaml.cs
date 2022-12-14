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

        public string operateur { get; set; }
        public string nb1 { get; set; }
        public string nb2 { get; set; }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            //LblContent.Text = (string)LblContent.Text + ((Button)sender).Content;
            //LblHistorique.Text = (string)LblHistorique.Text + ((Button)sender).Content;

            if (nb1 == null)
            {
                nb1 += (string)((Button)sender).Content;
                LblHistorique.Content = nb1;
                LblContent.Content = nb1;
            }
            else
            {
                nb2 += (string)((Button)sender).Content;
                LblHistorique.Content = nb1 + operateur + nb2;
                LblContent.Content = nb2;
            }
            //LblHistorique.Content = (string)LblHistorique.Content + ((Button)sender).Content;
            //LblContent.Content = (string)LblContent.Content + ((Button)sender).Content;
        }

        private void Clear(object sender, RoutedEventArgs e)
        {
            nb1 = null;
            nb2 = null;
            LblContent.Content = null;
            LblHistorique.Content = null;
        }

        private void Equals(object sender, RoutedEventArgs e)
        {
            switch (operateur)
            {
                case "+":
                    LblContent.Content = Convert.ToDouble(nb1) + Convert.ToDouble(nb2);
                    break;
                case "-":
                    LblContent.Content = Convert.ToDouble(nb1) - Convert.ToDouble(nb2);
                    break;
                case "*":
                    LblContent.Content = Convert.ToDouble(nb1) * Convert.ToDouble(nb2);
                    break;
                case "/":
                    LblContent.Content = Convert.ToDouble(nb1) / Convert.ToDouble(nb2);
                    break;
            }
        }

        private void Operator(object sender, RoutedEventArgs e)
        {
            operateur = (string)((Button)sender).Content;
            LblContent.Content = operateur;
            LblHistorique.Content = (string)LblHistorique.Content + operateur;
        }
    }
}
