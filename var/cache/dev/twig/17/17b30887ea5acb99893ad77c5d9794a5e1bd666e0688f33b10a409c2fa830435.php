<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_449e360eef634209834a29b3209e2a024ef01f79dfc9e5e79579d38e291b83f7 extends Twig_Template
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
        $__internal_91e3cebd9a8f050e615651f886cb4903ce0b2b6a1ff2f742ae8c168105d270f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e3cebd9a8f050e615651f886cb4903ce0b2b6a1ff2f742ae8c168105d270f3->enter($__internal_91e3cebd9a8f050e615651f886cb4903ce0b2b6a1ff2f742ae8c168105d270f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_91e3cebd9a8f050e615651f886cb4903ce0b2b6a1ff2f742ae8c168105d270f3->leave($__internal_91e3cebd9a8f050e615651f886cb4903ce0b2b6a1ff2f742ae8c168105d270f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
