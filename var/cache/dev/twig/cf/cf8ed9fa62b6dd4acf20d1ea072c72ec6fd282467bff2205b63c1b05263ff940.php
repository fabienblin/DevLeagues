<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_09928289a25f8f05f7f20aa78ab3b3e51b1788768d1baf7e027912f85000ef26 extends Twig_Template
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
        $__internal_0b4d65532a539a788cc894f89da9c56faaad7409992bda62c33e15fd8254b2cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4d65532a539a788cc894f89da9c56faaad7409992bda62c33e15fd8254b2cc->enter($__internal_0b4d65532a539a788cc894f89da9c56faaad7409992bda62c33e15fd8254b2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_46575a70ac7e526f4e36cae47e706a99d676098689367ddfe097138c71acdfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46575a70ac7e526f4e36cae47e706a99d676098689367ddfe097138c71acdfb5->enter($__internal_46575a70ac7e526f4e36cae47e706a99d676098689367ddfe097138c71acdfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0b4d65532a539a788cc894f89da9c56faaad7409992bda62c33e15fd8254b2cc->leave($__internal_0b4d65532a539a788cc894f89da9c56faaad7409992bda62c33e15fd8254b2cc_prof);

        
        $__internal_46575a70ac7e526f4e36cae47e706a99d676098689367ddfe097138c71acdfb5->leave($__internal_46575a70ac7e526f4e36cae47e706a99d676098689367ddfe097138c71acdfb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
