<?php
/**
 * Created by PhpStorm.
 * User: phil
 * Date: 18/12/2013
 * Time: 12:14
 */

namespace iim\BlogBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AdminCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('user:grant_admin')
            ->setDescription('Give ROLE_ADMIN to an User')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id')
            ->addOption('role', null, InputOption::VALUE_OPTIONAL, 'Role', 'ROLE_ADMIN')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $id = $input->getArgument('id');
        $role=$input->getOption('role');

        $container=$this->getContainer();
        $container->get('fos_user.user_manager')->find($id);


        $output->writeln("user $id has been granted");
    }
}
