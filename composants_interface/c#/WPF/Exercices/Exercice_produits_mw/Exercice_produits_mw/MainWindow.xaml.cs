using System;
using System.IO;
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

            string filename = @"../../../produits.txt";
            using (StreamReader reader = new StreamReader(filename))
            {
                string currentLine = reader.ReadLine();

                while (currentLine != null)
                {
                    string[] sousProduit = currentLine.Split(";");
                    Produits produit = new Produits(int.Parse(sousProduit[0]), sousProduit[1], sousProduit[2], int.Parse(sousProduit[3]));
                    liste.Add(produit);
                    currentLine = reader.ReadLine();
                }
            }
            return liste;
        }

        private void Row_DoubleClick(object sender, MouseButtonEventArgs e)
        {
            DataGridRow row = sender as DataGridRow;
            Produits produit = (Produits)row.Item;

            Window details = new DetailProduit(produit, this);
            details.ShowDialog();
            RemplirDataGrid();
        }
    }
}
