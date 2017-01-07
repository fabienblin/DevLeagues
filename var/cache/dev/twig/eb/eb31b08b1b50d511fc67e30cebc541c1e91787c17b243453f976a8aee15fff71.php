<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_282cb2a84dd732dcac34aff01d4991e007f54aa6da0b2f88226bc5874ef86744 extends Twig_Template
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
        $__internal_37aedaa120859544dcbe50eb0c7c7b36c2b33fb408aac7223834a477565f2c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37aedaa120859544dcbe50eb0c7c7b36c2b33fb408aac7223834a477565f2c3e->enter($__internal_37aedaa120859544dcbe50eb0c7c7b36c2b33fb408aac7223834a477565f2c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a96e5e808480385b2251e6cda659e1948f2629d55ea0e5dffcf1b2610fe13eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96e5e808480385b2251e6cda659e1948f2629d55ea0e5dffcf1b2610fe13eea->enter($__internal_a96e5e808480385b2251e6cda659e1948f2629d55ea0e5dffcf1b2610fe13eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_37aedaa120859544dcbe50eb0c7c7b36c2b33fb408aac7223834a477565f2c3e->leave($__internal_37aedaa120859544dcbe50eb0c7c7b36c2b33fb408aac7223834a477565f2c3e_prof);

        
        $__internal_a96e5e808480385b2251e6cda659e1948f2629d55ea0e5dffcf1b2610fe13eea->leave($__internal_a96e5e808480385b2251e6cda659e1948f2629d55ea0e5dffcf1b2610fe13eea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
