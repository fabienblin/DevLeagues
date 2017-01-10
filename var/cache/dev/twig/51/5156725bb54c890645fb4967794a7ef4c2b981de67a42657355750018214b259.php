<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1f924330e466d2f72f91e4ab5b9d0b65f46b04b286f0222e268e26c875ff5758 extends Twig_Template
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
        $__internal_bd04fa118118f9c7d652f6eb22ca7b986469996ec7eda3aa2a92d07f5bf4ca6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd04fa118118f9c7d652f6eb22ca7b986469996ec7eda3aa2a92d07f5bf4ca6e->enter($__internal_bd04fa118118f9c7d652f6eb22ca7b986469996ec7eda3aa2a92d07f5bf4ca6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5243aa261cfa3d276b9f5046850ad1262b7abd33b37e7baccd99d655a97a8cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5243aa261cfa3d276b9f5046850ad1262b7abd33b37e7baccd99d655a97a8cd2->enter($__internal_5243aa261cfa3d276b9f5046850ad1262b7abd33b37e7baccd99d655a97a8cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_bd04fa118118f9c7d652f6eb22ca7b986469996ec7eda3aa2a92d07f5bf4ca6e->leave($__internal_bd04fa118118f9c7d652f6eb22ca7b986469996ec7eda3aa2a92d07f5bf4ca6e_prof);

        
        $__internal_5243aa261cfa3d276b9f5046850ad1262b7abd33b37e7baccd99d655a97a8cd2->leave($__internal_5243aa261cfa3d276b9f5046850ad1262b7abd33b37e7baccd99d655a97a8cd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
