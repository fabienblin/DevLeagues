<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_9c5a5b5cf2e11d1d318f7b53b1273e34930bcb0cfac18266b21665acb7250bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_839ac080f1967d29778b7c4dab1444cfcecd01206a37a859c3374b93f48890b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839ac080f1967d29778b7c4dab1444cfcecd01206a37a859c3374b93f48890b7->enter($__internal_839ac080f1967d29778b7c4dab1444cfcecd01206a37a859c3374b93f48890b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_4cb757ce1cbb32d523b8c7be17e8df20847adbcd9350df7fba95cbe0220992e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb757ce1cbb32d523b8c7be17e8df20847adbcd9350df7fba95cbe0220992e6->enter($__internal_4cb757ce1cbb32d523b8c7be17e8df20847adbcd9350df7fba95cbe0220992e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_839ac080f1967d29778b7c4dab1444cfcecd01206a37a859c3374b93f48890b7->leave($__internal_839ac080f1967d29778b7c4dab1444cfcecd01206a37a859c3374b93f48890b7_prof);

        
        $__internal_4cb757ce1cbb32d523b8c7be17e8df20847adbcd9350df7fba95cbe0220992e6->leave($__internal_4cb757ce1cbb32d523b8c7be17e8df20847adbcd9350df7fba95cbe0220992e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
