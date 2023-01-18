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

namespace CRUDProduits
{
    /// <summary>
    /// Logique d'interaction pour Detail.xaml
    /// </summary>
    public partial class Detail : Window
    {
        public Detail(Produits p, Window m)
        {
            InitializeComponent();
            RemplissageChamp(p);
        }
        public void RemplissageChamp(Produits p)
        {
            libelleProduit.Text = p.LibelleProduit;
            idProduit.Content = p.IdProduit.ToString();
            numeroProduit.Text = p.NumeroProduit.ToString();
            quantite.Text = p.Quantite.ToString();
        }

        private void valider_Click(object sender, RoutedEventArgs e)
        {
            Produits p = new Produits(Int32.Parse((string)idProduit.Content), libelleProduit.Text,Int32.Parse( numeroProduit.Text), Int32.Parse(quantite.Text));
            ProduitsService.UpdateProduit(p);
            this.Close();
        }

        private void annuler_Click(object sender, RoutedEventArgs e)
        {
            this.Close();
        }
    }
}
