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
using System.Windows.Shapes;

namespace Exercice_produits_mw
{
    /// <summary>
    /// Interaction logic for DetailProduit.xaml
    /// </summary>
    public partial class DetailProduit : Window
    {
        public DetailProduit(Produits produit, Window window)
        {
            InitializeComponent();
            RemplirChamps(produit);
        }

        public void RemplirChamps(Produits produit)
        {
            labelIdProduit.Content = produit.IdProduit;
            textBoxNomProduit.Text = produit.NomProduit;
            textBoxQuantiteProduit.Text = produit.Quantite.ToString();
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            Produits produits = new Produits(Int32.Parse((string)labelIdProduit.Content), textBoxNomProduit.Text, Int32.Parse(textBoxQuantiteProduit.Text));
            
        }

        private void CancelUpdate(object sender, RoutedEventArgs e)
        {
            this.Close();
        }
    }
}
