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

namespace CrudProduitsProgression
{
    /// <summary>
    /// Logique d'interaction pour FormProduits.xaml
    /// </summary>
    public partial class FormProduits : Window
    {
        public string Mode { get; set; }
        public FormProduits(Produits p, string mode)
        {
            InitializeComponent();
            Mode = mode;
            switch (Mode)
            {
                case "ajouter":
                    btnValider.Content = "Ajouter";
                    break;
                case "modifier":
                    btnValider.Content = "Modifier";
                    RemplirInputs(p);
                    break;
                case "supprimer":
                    btnValider.Content = "Supprimer";
                    DisabledInputs();
                    RemplirInputs(p);
                    break;

                default:
                    break;
            }
        }

        private void annuler_Click(object sender, RoutedEventArgs e)
        {
            this.Close();
        }

        private void valider_Click(object sender, RoutedEventArgs e)
        {
            Produits p;
            switch (Mode)
            {
                case "ajouter":
                    // on met un id par défaut, il sera écrasé dans ProduitsService
                    idProduit.Content = 0;
                    // on constitue un produit
                    p = remplirProduit();
                    // on ajoute le produit
                    ProduitsService.AddProduit(p);
                    break;
                case "modifier":
                    // on constitue un produit
                    p = remplirProduit();
                    // on ajoute le produit
                    ProduitsService.UpdateProduit(p);
                    break;
                case "supprimer":
                    // on constitue un produit
                    p = remplirProduit();
                    // on ajoute le produit
                    ProduitsService.DeleteProduit(p);
                    break;
                default:
                    break;
            }
            this.Close();
        }
        public Produits remplirProduit()
        {
            Produits p = new Produits();
            p.IdProduit = (int)idProduit.Content;
            p.LibelleProduit = tbxLibelleProduit.Text;
            p.NumeroProduit = Int32.Parse(tbxNumeroProduit.Text);
            p.Quantite = Int32.Parse(tbxQuantite.Text);
            return p;
        }
        public void RemplirInputs(Produits p)
        {
            idProduit.Content = p.IdProduit;
            tbxLibelleProduit.Text = p.LibelleProduit;
            tbxNumeroProduit.Text = p.NumeroProduit.ToString();
            tbxQuantite.Text = p.Quantite.ToString();
        }

        public void  DisabledInputs()
        {
            tbxLibelleProduit.IsEnabled = false;
            tbxNumeroProduit.IsEnabled = false;
            tbxQuantite.IsEnabled = false;
        }
    }
}
