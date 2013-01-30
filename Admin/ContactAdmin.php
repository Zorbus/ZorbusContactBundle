<?php
namespace Zorbus\ContactBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('sender', null, array(
                'constraints' => array(
                    new NotBlank()
                )
            ))
            ->add('receiver', null, array(
                'constraints' => array(
                    new NotBlank()
                )
            ))
            ->add('title', null, array(
                'constraints' => array(
                    new NotBlank()
                )
            ))
            ->add('subject', null, array(
                'constraints' => array(
                    new NotBlank()
                )
            ))
            ->add('message', 'textarea', array(
                'required' => false,
                'attr' => array('class' => 'ckeditor')
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('subject')
            ->add('sender')
            ->add('receiver')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('subject')
            ->add('sender')
            ->add('receiver')
            ->add('created_at')
        ;
    }
    public function configureShowFields(ShowMapper $filter)
    {
        $filter
            ->add('title')
            ->add('subject')
            ->add('message')
            ->add('attachment')
            ->add('sender')
            ->add('receiver')
            ->add('cc')
            ->add('bcc')
            ->add('created_at')
        ;
    }
}