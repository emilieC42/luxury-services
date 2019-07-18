<?php

namespace App\Form;

use App\Entity\Candidate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender')
            ->add('firstName')
            ->add('address')
            ->add('country')
            ->add('nationality')
            ->add('passport')
            ->add('curriculumVitae')
            ->add('profilPicture')
            ->add('birthday')
            ->add('placeBirthday')
            ->add('experience')
            ->add('notes')
            ->add('availability')
            ->add('files')
            ->add('dateDeleted')
            ->add('dateUpdated')
            ->add('dateCreated')
            ->add('descriptionCandidate')
            ->add('password')
            ->add('email')
            ->add('categorie')
            ->add('idJob')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
