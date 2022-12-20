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
    /// Interaction logic for FormCategories.xaml
    /// </summary>
    public partial class FormCategories : Window
    {
        public string Mode { get; set; }
        public FormCategories(Categories cat, string mode)
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
                    RemplirInputs(cat);
                    break;
                case "supprimer":
                    btnValider.Content = "Supprimer";
                    DisableInputs();
                    RemplirInputs(cat);
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
            Categories cat;
            switch (Mode)
            {
                case "ajouter":
                    idCategorie.Content = 0;
                    cat = RemplirCategorie();
                    CategoriesService.AddCategorie(cat);
                    break;
                case "modifier":
                    cat = RemplirCategorie();
                    CategoriesService.UpdateCategorie(cat);
                    break;
                case "supprimer":
                    cat = RemplirCategorie();
                    CategoriesService.DeleteCategorie(cat);
                    break;
                default:
                    break;
            }
            this.Close();
        }

        public Categories RemplirCategorie()
        {
            Categories cat = new Categories();
            cat.IdCategorie = (int)idCategorie.Content;
            cat.LibelleCategorie = tbxLibelleCategorie.Text;
            cat.DescCategorie = txtbxDescCategorie.Text;
            return cat;
        }

        public void RemplirInputs(Categories cat)
        {
            idCategorie.Content = cat.IdCategorie;
            tbxLibelleCategorie.Text = cat.LibelleCategorie;
            txtbxDescCategorie.Text = cat.DescCategorie;
        }

        public void DisableInputs()
        {
            tbxLibelleCategorie.IsEnabled = false;
            txtbxDescCategorie.IsEnabled = false;
        }
    }
}
