<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ab46fcbfb3c1ed666512193180eb7dff1126edf5705f287450598194e6ffe0e4 extends Twig_Template
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
        $__internal_a63e572d6e93c229d3a2a0bae2c7415be86747d0cb5916bacf956c26f3d7d9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63e572d6e93c229d3a2a0bae2c7415be86747d0cb5916bacf956c26f3d7d9ab->enter($__internal_a63e572d6e93c229d3a2a0bae2c7415be86747d0cb5916bacf956c26f3d7d9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a63e572d6e93c229d3a2a0bae2c7415be86747d0cb5916bacf956c26f3d7d9ab->leave($__internal_a63e572d6e93c229d3a2a0bae2c7415be86747d0cb5916bacf956c26f3d7d9ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
