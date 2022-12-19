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
    /// Logique d'interaction pour gestionProduits.xaml
    /// </summary>
    public partial class GestionProduits : Window
    {
        public GestionProduits()
        {
            InitializeComponent();
            RemplirDataGrid();
        }
        public void RemplirDataGrid()
        {
            dGProduits.ItemsSource = ProduitsService.ListProduits();
        }

        private void dGProduits_MouseDoubleClick(object sender, MouseButtonEventArgs e)
        {
            AfficherForm("modifier");
        }

        private void btnModifier_Click(object sender, RoutedEventArgs e)
        {
            AfficherForm("modifier");
        }

        private void btnAjouter_Click(object sender, RoutedEventArgs e)
        {
            AfficherForm("ajouter");

        }

        private void btnSupprimer_Click(object sender, RoutedEventArgs e)
        {
            AfficherForm("supprimer");
        }


        public void AfficherForm(string mode)
        {
            //on vérifie si une ligne est selectionnée
            if (dGProduits.SelectedItem != null || mode == "ajouter")
            {
                Produits p = (Produits)dGProduits.SelectedValue;
                FormProduits f = new FormProduits(p, mode);
                f.ShowDialog();
                // a la fermeture de la fenetre form, on remet le datagrid à jour
                RemplirDataGrid();
            }
        }
    }
}
