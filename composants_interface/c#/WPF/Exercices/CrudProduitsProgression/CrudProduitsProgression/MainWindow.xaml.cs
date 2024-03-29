﻿
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

namespace CrudProduitsProgression
{
    /// <summary>
    /// Logique d'interaction pour MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void AfficherProduits(object sender, RoutedEventArgs e)
        {
            Window gestionProduits = new GestionProduits();
            gestionProduits.ShowDialog();
        }

        private void AfficherCategories(object sender, RoutedEventArgs e)
        {
            Window gestionCategories = new GestionCategories();
            gestionCategories.ShowDialog();
        }
    }
}
