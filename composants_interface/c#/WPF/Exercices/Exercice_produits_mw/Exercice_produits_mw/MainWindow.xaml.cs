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

namespace Exercice_produits_mw
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
            RemplirDataGrid();
        }

        public void RemplirDataGrid()
        {
            dgProduits.ItemsSource = CreerListe();
        }

        private List<Produits> CreerListe()
        {
            List<Produits> liste = new List<Produits>();

            string filename = @"U:\59011-14-05\composants_interface\c#\WPF\Exercices\Exercice_produits_mw\Exercice_produits_mw\produits.txt";
            string[] produits = System.IO.File.ReadAllLines(filename);
            foreach (string produit in produits)
            {
                //Produits p = new Produits();
                //liste.Add(p);
                test.Content = produit;
            }

            return liste;
        }

    }
}
