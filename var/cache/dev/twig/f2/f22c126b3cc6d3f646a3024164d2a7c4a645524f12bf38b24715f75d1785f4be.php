<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4862369b2c4abcf6ae4bc63c580000a21508879a1b4fa6cafc63f79a63b14c82 extends Twig_Template
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
        $__internal_1b32be2fa485ba3f95939e714e82043db8abf26440b7ba86fbf7f250af6c33c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b32be2fa485ba3f95939e714e82043db8abf26440b7ba86fbf7f250af6c33c0->enter($__internal_1b32be2fa485ba3f95939e714e82043db8abf26440b7ba86fbf7f250af6c33c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_870da44fbfdff6190c4c6184efcfcf9051d25e1905b078b8197d1ab033910d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870da44fbfdff6190c4c6184efcfcf9051d25e1905b078b8197d1ab033910d38->enter($__internal_870da44fbfdff6190c4c6184efcfcf9051d25e1905b078b8197d1ab033910d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1b32be2fa485ba3f95939e714e82043db8abf26440b7ba86fbf7f250af6c33c0->leave($__internal_1b32be2fa485ba3f95939e714e82043db8abf26440b7ba86fbf7f250af6c33c0_prof);

        
        $__internal_870da44fbfdff6190c4c6184efcfcf9051d25e1905b078b8197d1ab033910d38->leave($__internal_870da44fbfdff6190c4c6184efcfcf9051d25e1905b078b8197d1ab033910d38_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
