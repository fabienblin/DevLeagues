<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_788d18e67e55a5408129b99c5469155ddddf7d2f4e134eb130e4f883a09435e7 extends Twig_Template
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
        $__internal_78821deb39d071eb70c56ec55f325c6aa283fd57cf515ce4e7ab497119aa81f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78821deb39d071eb70c56ec55f325c6aa283fd57cf515ce4e7ab497119aa81f2->enter($__internal_78821deb39d071eb70c56ec55f325c6aa283fd57cf515ce4e7ab497119aa81f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9a5bcce941ffe0def0b5f3eebb638f7533b1efdde56fc0a9d43ecc9ee9c3ad76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5bcce941ffe0def0b5f3eebb638f7533b1efdde56fc0a9d43ecc9ee9c3ad76->enter($__internal_9a5bcce941ffe0def0b5f3eebb638f7533b1efdde56fc0a9d43ecc9ee9c3ad76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_78821deb39d071eb70c56ec55f325c6aa283fd57cf515ce4e7ab497119aa81f2->leave($__internal_78821deb39d071eb70c56ec55f325c6aa283fd57cf515ce4e7ab497119aa81f2_prof);

        
        $__internal_9a5bcce941ffe0def0b5f3eebb638f7533b1efdde56fc0a9d43ecc9ee9c3ad76->leave($__internal_9a5bcce941ffe0def0b5f3eebb638f7533b1efdde56fc0a9d43ecc9ee9c3ad76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
