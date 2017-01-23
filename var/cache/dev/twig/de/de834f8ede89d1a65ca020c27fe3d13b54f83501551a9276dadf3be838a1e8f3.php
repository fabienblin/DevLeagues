<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a0e16e3dda06cb4b558fcd4dbde26602c71c706fec1dcd6d12e7db62c8341dc9 extends Twig_Template
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
        $__internal_bdaad94954930b8fce0f9a6daa04a5a469be176ba57ed571f22cbb25e60b86b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdaad94954930b8fce0f9a6daa04a5a469be176ba57ed571f22cbb25e60b86b5->enter($__internal_bdaad94954930b8fce0f9a6daa04a5a469be176ba57ed571f22cbb25e60b86b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_35efdd4d8ad9f8b110d9631b2da52a50d92f074c505ec5083c9a22db76d67329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35efdd4d8ad9f8b110d9631b2da52a50d92f074c505ec5083c9a22db76d67329->enter($__internal_35efdd4d8ad9f8b110d9631b2da52a50d92f074c505ec5083c9a22db76d67329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_bdaad94954930b8fce0f9a6daa04a5a469be176ba57ed571f22cbb25e60b86b5->leave($__internal_bdaad94954930b8fce0f9a6daa04a5a469be176ba57ed571f22cbb25e60b86b5_prof);

        
        $__internal_35efdd4d8ad9f8b110d9631b2da52a50d92f074c505ec5083c9a22db76d67329->leave($__internal_35efdd4d8ad9f8b110d9631b2da52a50d92f074c505ec5083c9a22db76d67329_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
