<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_262e8a61fc5c308fb79e8f00f048cec0c983d38875d241d208db018b140bf473 extends Twig_Template
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
        $__internal_d6b64a8ddc55a4ecf43b8d988448f624a60beef41b5b4247be962cbd90663015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b64a8ddc55a4ecf43b8d988448f624a60beef41b5b4247be962cbd90663015->enter($__internal_d6b64a8ddc55a4ecf43b8d988448f624a60beef41b5b4247be962cbd90663015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_0d64eee11fe13412c50fff8714da5d42d438311c4473473e49597dfad8f926fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d64eee11fe13412c50fff8714da5d42d438311c4473473e49597dfad8f926fa->enter($__internal_0d64eee11fe13412c50fff8714da5d42d438311c4473473e49597dfad8f926fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d6b64a8ddc55a4ecf43b8d988448f624a60beef41b5b4247be962cbd90663015->leave($__internal_d6b64a8ddc55a4ecf43b8d988448f624a60beef41b5b4247be962cbd90663015_prof);

        
        $__internal_0d64eee11fe13412c50fff8714da5d42d438311c4473473e49597dfad8f926fa->leave($__internal_0d64eee11fe13412c50fff8714da5d42d438311c4473473e49597dfad8f926fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
