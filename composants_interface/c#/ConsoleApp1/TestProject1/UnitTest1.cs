using ConsoleApp1;
using NUnit.Framework;
using System;

namespace TestProject1
{
    public class Tests
    {

        //[SetUp]
        //public void Setup()
        //{
        //}
        [Test]
        public void Test1()
        {
            Assert.Fail();
        }

        Compte compte;
        [SetUp]
        public void Setup()
        {
            double soldeDepart = 11.99;
            compte = new Compte("Mr Toto", soldeDepart);
        }



        //[Test]
        //public void Debit_test()
        //{
        //    double soldeActuel = compte.Solde;
        //    double montantDebite = 11.99;
        //    double attendu = 0;

        //    compte.Debit(montantDebite);
        //    Assert.AreEqual(attendu, soldeActuel, 0.001, "Compte mal débité");
        //}
        [Test]
        public void Debit_MontantValide()
        {
            // Arrange
            double montantDebite = 4.55;
            double attendu = 7.44;

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
            double montantDebite = -4;
            // Act et Assert
            Assert.Throws<ArgumentOutOfRangeException>(() =>
           compte.Debit(montantDebite));
        }
        [Test]
        public void Debit_MontantSuperieurSolde()
        {
            // Arrange
            double montantDebite = -44.55;
            // Act et Assert
            Assert.Throws<ArgumentOutOfRangeException>(() =>
           compte.Debit(montantDebite));
        }


    }
}
