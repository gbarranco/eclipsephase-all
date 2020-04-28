<?php

namespace App\Form;

use App\Entity\Backups;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BackupsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('backupDate')
            ->add('baseCog')
            ->add('baseCoo')
            ->add('baseInt')
            ->add('baseRef')
            ->add('baseAst')
            ->add('baseSom')
            ->add('baseVol')
            ->add('bonusCog')
            ->add('bonusCoo')
            ->add('bonusInt')
            ->add('bonusRef')
            ->add('bonusAst')
            ->add('bonusSom')
            ->add('bonusVol')
            ->add('audacity')
            ->add('stress')
            ->add('trauma')
            ->add('traumaText')
            ->add('baseDispersalWeapons')
            ->add('bonusDispersalWeapons')
            ->add('baseExoticRifles')
            ->add('bonusExoticRifles')
            ->add('baseGuidedWeapons')
            ->add('bonusGuidedWeapons')
            ->add('baseRayWeapons')
            ->add('bonusRayWeapons')
            ->add('baseKineticWeapons')
            ->add('bonusKineticWeapons')
            ->add('baseJetWeapons')
            ->add('bonusJetWeapons')
            ->add('baseBluntWeapons')
            ->add('bonusBluntWeapons')
            ->add('baseMeleeWeapons')
            ->add('bonusMeleeWeapons')
            ->add('baseEdgedWeapons')
            ->add('bonusEdgedWeapons')
            ->add('baseNonArmedFight')
            ->add('bonusNonArmedFight')
            ->add('baseMountedWeapons')
            ->add('bonusMountedWeapons')
            ->add('baseEvasion')
            ->add('bonusEvasion')
            ->add('baseFreeFall')
            ->add('bonusFreeFall')
            ->add('baseDisguise')
            ->add('bonusDisguise')
            ->add('baseRobbery')
            ->add('bonusRobbery')
            ->add('baseInfiltration')
            ->add('bonusInfiltration')
            ->add('baseClimbing')
            ->add('bonusClimbing')
            ->add('baseSwimming')
            ->add('bonusSwimming')
            ->add('baseParkour')
            ->add('bonusParkour')
            ->add('baseFlight')
            ->add('bonusFlight')
            ->add('baseDemolition')
            ->add('bonusDemolition')
            ->add('baseInfosec')
            ->add('bonusInfosec')
            ->add('baseInterface')
            ->add('bonusInterface')
            ->add('baseEquipment1')
            ->add('bonusEquipment1')
            ->add('baseEquipment2')
            ->add('bonusEquipment2')
            ->add('baseEquipment3')
            ->add('bonusEquipment3')
            ->add('baseMedicine1')
            ->add('bonusMedicine1')
            ->add('baseMedicine2')
            ->add('bonusMedicine2')
            ->add('baseProgramming')
            ->add('bonusProgramming')
            ->add('baseSearch')
            ->add('bonusSearch')
            ->add('basePsychoSurgery')
            ->add('bonusPsychoSurgery')
            ->add('baseExcavation')
            ->add('bonusExcavation')
            ->add('baseInvestigation')
            ->add('bonusInvestigation')
            ->add('baseNavigation')
            ->add('bonusNavigation')
            ->add('basePerception')
            ->add('bonusPerception')
            ->add('basePsiAssault')
            ->add('bonusPsiAssault')
            ->add('baseControl')
            ->add('bonusControl')
            ->add('baseSensation')
            ->add('bonusSensation')
            ->add('baseAnimalControl')
            ->add('bonusAnimalControl')
            ->add('baseImposture')
            ->add('bonusImposture')
            ->add('baseIntimidation')
            ->add('bonusIntimidation')
            ->add('baseKinesics')
            ->add('bonusKinesics')
            ->add('basePersuasion')
            ->add('bonusPersuasion')
            ->add('baseProtocol')
            ->add('bonusProtocol')
            ->add('baseNetwork1')
            ->add('bonusNetwork1')
            ->add('baseNetwork2')
            ->add('bonusNetwork2')
            ->add('baseNetwork3')
            ->add('bonusNetwork3')
            ->add('baseNetwork4')
            ->add('bonusNetwork4')
            ->add('baseSubterfuge')
            ->add('bonusSubterfuge')
            ->add('basePiloting1')
            ->add('bonusPiloting1')
            ->add('basePiloting2')
            ->add('bonusPiloting2')
            ->add('basePiloting3')
            ->add('bonusPiloting3')
            ->add('basePiloting4')
            ->add('bonusPiloting4')
            ->add('baseArt1')
            ->add('bonusArt1')
            ->add('baseArt2')
            ->add('bonusArt2')
            ->add('baseArt3')
            ->add('bonusArt3')
            ->add('bonusArt4')
            ->add('baseArt4')
            ->add('baseInterest1')
            ->add('bonusInterest1')
            ->add('baseInterest2')
            ->add('bonusInterest2')
            ->add('baseInterest3')
            ->add('bonusInterest3')
            ->add('baseInterest4')
            ->add('baseNativeLanguage')
            ->add('bonusNativeLanguage')
            ->add('baseLanguage1')
            ->add('bonusLanguage1')
            ->add('baseLanguage2')
            ->add('bonusLanguage2')
            ->add('baseLanguage3')
            ->add('bonusLanguage3')
            ->add('baseLanguage4')
            ->add('bonusLanguage4')
            ->add('baseProfession1')
            ->add('bonusProfession1')
            ->add('baseProfession2')
            ->add('bonusProfession2')
            ->add('baseProfession3')
            ->add('bonusProfession3')
            ->add('baseProfession4')
            ->add('bonusProfession4')
            ->add('baseTheory1')
            ->add('bonusTheory1')
            ->add('baseTheory2')
            ->add('bonusTheory2')
            ->add('baseTheory3')
            ->add('bonusTheory3')
            ->add('baseTheory4')
            ->add('bonusTheory4')
            ->add('playableCharacter')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Backups::class,
        ]);
    }
}