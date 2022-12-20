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
    /// Interaction logic for GestionCategories.xaml
    /// </summary>
    public partial class GestionCategories : Window
    {
        public GestionCategories()
        {
            InitializeComponent();
            RemplirDataGrid();
        }
        public void RemplirDataGrid()
        {
            dGCategories.ItemsSource = CategoriesService.ListCategories();
        }

        private void btnAjouter_Click(object sender, RoutedEventArgs e)
        {
            AfficherForm("ajouter");
        }

        private void btnModifier_Click(object sender, RoutedEventArgs e)
        {
            AfficherForm("modifier");
        }

        private void btnSupprimer_Click(object sender, RoutedEventArgs e)
        {
            AfficherForm("supprimer");
        }

        public void AfficherForm(string mode)
        {
            //on vérifie si une ligne est selectionnée
            if (dGCategories.SelectedItem != null || mode == "ajouter")
            {
                Categories cat = (Categories)dGCategories.SelectedValue;
                FormCategories f = new FormCategories(cat, mode);
                f.ShowDialog();
                // a la fermeture de la fenetre form, on remet le datagrid à jour
                RemplirDataGrid();
            }
        }
    }
}
