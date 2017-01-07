<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8fe6f911ff45c77ec47653a65b5d15a4925a913e31ed49773c7fd68924c15c7a extends Twig_Template
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
        $__internal_0f8b0bdee06a07906b0cfdaca0f428624064fc2c1cef3a3a03c1dba032e9ed0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8b0bdee06a07906b0cfdaca0f428624064fc2c1cef3a3a03c1dba032e9ed0d->enter($__internal_0f8b0bdee06a07906b0cfdaca0f428624064fc2c1cef3a3a03c1dba032e9ed0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_3ad5486a0c41efd7c76623d18898a14201eef66e5fd9f48e822d5a3b759a31f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad5486a0c41efd7c76623d18898a14201eef66e5fd9f48e822d5a3b759a31f2->enter($__internal_3ad5486a0c41efd7c76623d18898a14201eef66e5fd9f48e822d5a3b759a31f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_0f8b0bdee06a07906b0cfdaca0f428624064fc2c1cef3a3a03c1dba032e9ed0d->leave($__internal_0f8b0bdee06a07906b0cfdaca0f428624064fc2c1cef3a3a03c1dba032e9ed0d_prof);

        
        $__internal_3ad5486a0c41efd7c76623d18898a14201eef66e5fd9f48e822d5a3b759a31f2->leave($__internal_3ad5486a0c41efd7c76623d18898a14201eef66e5fd9f48e822d5a3b759a31f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
