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

        double nb1;
        double nb2;
        string numbers;

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            LblContent.Text = (string)LblContent.Text + ((Button)sender).Content;
            //nb1 = Convert.ToDouble(LblContent.Text);
            //test.Content = LblContent.Text;
            //char[] operand = { '+', '-', '*', '/' };
            //numbers = Convert.ToString(LblContent.Text.Split(operand));
            //foreach (var num in numbers)
            //{
            //    test.Content = $"{num}";
            //}

        }

        private void Clear(object sender, RoutedEventArgs e)
        {
            LblContent.Text = String.Empty;
        }

        private void Equals(object sender, RoutedEventArgs e)
        {
            LblContent.Text = "";
        }

        //private void Operand(object sender, RoutedEventArgs e)
        //{

        //}
    }
}
