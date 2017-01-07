<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e0dc663f44a5bc1dbbe6d3c4e6ae6cda24e7445e2e1bbbf22289c97a580a203c extends Twig_Template
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
        $__internal_3bcd0f21b12336f0073cbde3d487ff5b47bce406d3dc316ed4d727e3662f9574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcd0f21b12336f0073cbde3d487ff5b47bce406d3dc316ed4d727e3662f9574->enter($__internal_3bcd0f21b12336f0073cbde3d487ff5b47bce406d3dc316ed4d727e3662f9574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_7571f76ce904ee967b15132282bf0017852167f19de73c901d6740d4246a086b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7571f76ce904ee967b15132282bf0017852167f19de73c901d6740d4246a086b->enter($__internal_7571f76ce904ee967b15132282bf0017852167f19de73c901d6740d4246a086b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3bcd0f21b12336f0073cbde3d487ff5b47bce406d3dc316ed4d727e3662f9574->leave($__internal_3bcd0f21b12336f0073cbde3d487ff5b47bce406d3dc316ed4d727e3662f9574_prof);

        
        $__internal_7571f76ce904ee967b15132282bf0017852167f19de73c901d6740d4246a086b->leave($__internal_7571f76ce904ee967b15132282bf0017852167f19de73c901d6740d4246a086b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
