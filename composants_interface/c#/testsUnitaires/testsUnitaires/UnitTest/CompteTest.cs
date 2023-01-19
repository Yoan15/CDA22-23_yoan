using NUnit.Framework;
using System;
using testsUnitaires;

namespace UnitTest
{
    public class CompteTest
    {
        [SetUp]
        public void Setup()
        {
        }
        [Test]
        public void Test1()
        {
            Assert.Pass();
        }

        [Test]
        public void Debit_MontantValide()
        {
            // Arrange
            double soldeDepart = 11.99;
            double montantDebite = 4.55;
            double attendu = 7.44;
            Compte compte = new Compte("Mr Toto", soldeDepart);
            // Act
            compte.Debit(montantDebite);
            // Assert
            double soldeActuel = compte.Solde;
            Assert.AreEqual(attendu, soldeActuel, 0.001, "Compte mal débité");
        }
        [Test]
        public void Debit_MontantNegatif()
        {
            // Arrange
            double soldeDepart = 11.99;
            double montantDebite = -4;
            Compte compte = new Compte("Mr Toto", soldeDepart);
            // Act et Assert
            Assert.Throws<ArgumentOutOfRangeException>(() =>
           compte.Debit(montantDebite));
        }
        [Test]
        public void Debit_MontantSuperieurSolde()
        {
            // Arrange
            double soldeDepart = 11.99;
            double montantDebite = -44.55;
            Compte compte = new Compte("Mr Toto", soldeDepart);
            // Act et Assert
            Assert.Throws<ArgumentOutOfRangeException>(() =>
           compte.Debit(montantDebite));
        }
    }
}
